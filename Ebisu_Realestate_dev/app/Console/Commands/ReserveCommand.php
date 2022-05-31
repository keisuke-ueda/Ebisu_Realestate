<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DateTime;
use Illuminate\Support\Facades\DB;

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
        // 本日の日付
        $today = new Datetime();

        // 6/11
        $point_date = new Datetime();
        $point_date->setDate(2022,6,11);

        // 6/11以降は当日レコードを削除する
        if ($today >= $point_date) {
            $delete_date = $today;
            $delete_date_w = $delete_date->format('w');
            $delete_date = $delete_date->format('Y/n/j');

            DB::table('ReservationSet')
            ->where('date', $delete_date)
            ->delete();

            DB::table('Reservation')
            ->where('reservation_date', $delete_date)
            ->delete();

            echo "{$delete_date}.(.{$delete_date_w}.)のデータを削除しました。";
        } else {
            echo "削除データはありません";
        }


        // 6/11以降は59日後のレコードを自動生成する

        if ($today >= $point_date) {
            $insert_date = $today->modify("+59 days");
            $insert_date_w = $insert_date->format('w');
            $insert_date = $insert_date->format('Y/n/j');

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

            echo "{$insert_date}.(.{$insert_date_w}.)のデータを生成しました。";
        } else {
            echo "生成データはありません";
        }

    }
}
