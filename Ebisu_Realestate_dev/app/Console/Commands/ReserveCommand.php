<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReserveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation_set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $days =  ['日','月', '火', '水', '木', '金', '土'];
        
        // 本日の日付
        $today = new Datetime();

        // 6/11
        $point_date = new Datetime();
        $point_date->setDate(2022,6,11);

        // 6/11以降は当日レコードを削除する
        if ($today >= $point_date) {
            $delete_date = clone $today;
            $delete_date_w = $delete_date->format('w');
            $delete_date = $delete_date->format('Y/n/j');

            try {
                // Main 
                DB::table('Main')
                ->where('reservation_date', $delete_date)
                ->delete();


                // Day
                DB::table('Day')
                ->where('reservation_date', $delete_date)
                ->delete();


                // Reservation
                $reservation_no_array = DB::table('Time')
                ->whereIn('reservation_time', [$delete_date.' '.'10:00〜11:30', $delete_date.' '.'13:00〜14:30', $delete_date.' '.'16:00〜17:30'])
                ->whereNotNull('reservation_no')
                ->pluck('reservation_no')
                ->toArray();

                DB::table('Reservation')
                ->whereIn('reservation_no', $reservation_no_array)
                ->delete();


                // Time
                DB::table('Time')
                ->whereIn('reservation_time', [$delete_date.' '.'10:00〜11:30', $delete_date.' '.'13:00〜14:30', $delete_date.' '.'16:00〜17:30'])
                ->delete();

                Log::channel('reserve_set')->info($delete_date."(".$days[$delete_date_w].")のデータを削除しました。");
                echo $delete_date."(".$days[$delete_date_w].")のデータを削除しました。";
            } catch(\Exception $e) {
                Log::channel('reserve_set')->info($e->getMessage());
                echo $e->getMessage();
            }
            
        } else {
            Log::channel('reserve_set')->info("削除データはありません");
            echo "削除データはありません";
        }


        // 6/11以降は当日から60日後のレコードを自動生成する

        if ($today >= $point_date) {
            $insert_date = clone $today;
            $insert_date = $insert_date->modify("+60 days");
            $insert_date_w = $insert_date->format('w');
            $insert_date = $insert_date->format('Y/n/j');

            try {
                // Main登録
                DB::table('Main')
                ->insert([
                    "reservation_date" => $insert_date,
                ]);

                // Day登録
                $day_data = [
                    [
                        "reservation_date" => $insert_date,
                        "reservation_time" => $insert_date.' '.'10:00〜11:30',
                    ],
                    [
                        "reservation_date" => $insert_date,
                        "reservation_time" => $insert_date.' '.'13:00〜14:30',
                    ],
                    [
                        "reservation_date" => $insert_date,
                        "reservation_time" => $insert_date.' '.'16:00〜17:30',
                    ]
                ];

                DB::table('Day')->insert($day_data);


                // 上限の数(3)だけTime登録
                $time_data = [];

                for ($x=0; $x<=2; $x++) {
                    array_push($time_data, ["reservation_time" => $insert_date.' '.'10:00〜11:30', "reservation_max" => 3]);
                }

                for ($y=0; $y<=2; $y++) {
                    array_push($time_data, ["reservation_time" => $insert_date.' '.'13:00〜14:30', "reservation_max" => 3]);
                }

                for ($z=0; $z<=2; $z++) {
                    array_push($time_data, ["reservation_time" => $insert_date.' '.'16:00〜17:30', "reservation_max" => 3]);
                }

                DB::table('Time')->insert($time_data);

                Log::channel('reserve_set')->info($insert_date."(".$days[$insert_date_w].")のデータを生成しました。");
                echo $insert_date."(".$days[$insert_date_w].")のデータを生成しました。";
            } catch(\Exception $e) {
                Log::channel('reserve_set')->info($e->getMessage());
                echo $e->getMessage();
            }
        } else {
            Log::channel('reserve_set')->info("生成データはありません");
            echo "生成データはありません";
        }

    }
}
