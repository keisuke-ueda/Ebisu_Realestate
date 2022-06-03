<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ReserveSet extends Model
{
    public function setArray($weeks) {

        $weeks_modified = [];

        foreach ($weeks as $date) {
            $record = DB::table('Main')->where('reservation_date', $date[0])->get()->first();

            if (!empty($record)) {
                $record1 = DB::table('Time')->where('reservation_time', $date[0].' '.'10:00〜11:30')->get()->first();
                if (!empty($record1)) {
                    $max1 = $record1->reservation_max;
                    $count1 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'10:00〜11:30')->count();
                } else {
                    $max1 = 0;
                    $count1 = 0;
                }
                
                $record2 = DB::table('Time')->where('reservation_time', $date[0].' '.'13:00〜14:30')->get()->first();
                if (!empty($record2)) {
                    $max2 = $record2->reservation_max;
                    $count2 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'13:00〜14:30')->count();
                } else {
                    $max2 = 0;
                    $count2 = 0;
                }

                $record3 = DB::table('Time')->where('reservation_time', $date[0].' '.'16:00〜17:30')->get()->first();
                if (!empty($record3)) {
                    $max3 = $record3->reservation_max;
                    $count3 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'16:00〜17:30')->count();
                } else {
                    $max3 = 0;
                    $count3 = 0;
                }

            } else {
                $max1 = 3;
                $count1 = 0;

                $max2 = 3;
                $count2 = 0;

                $max3 = 3;
                $count3 = 0;
            }

            $date[4] = [$max1, $max2, $max3];
            $date[5] = [$count1, $count2, $count3];
            array_push($weeks_modified, $date);
        }

        return $weeks_modified;
    }


    public function updateData($date, $max1, $max2, $max3) {

        $record = DB::table('Main')->where('reservation_date', $date[0])->get()->first();

        if (!empty($record)) {
            
            DB::table('Time')
            ->where('reservation_time', $date[0].' '.'10:00〜11:30')
            ->update([
                "reservation_max" => $max1,
                "update_date" => Carbon::now()
            ]);

            DB::table('Time')
            ->where('reservation_time', $date[0].' '.'13:00〜14:30')
            ->update([
                "reservation_max" => $max2,
                "update_date" => Carbon::now()
            ]);

            DB::table('Time')
            ->where('reservation_time', $date[0].' '.'16:00〜17:30')
            ->update([
                "reservation_max" => $max3,
                "update_date" => Carbon::now()
            ]);

            // 上限の数が変わった場合、Timeテーブルのレコード数も変える
            $this->setCount($max1, $date[0].' '.'10:00〜11:30');
            $this->setCount($max2, $date[0].' '.'13:00〜14:30');
            $this->setCount($max3, $date[0].' '.'16:00〜17:30');
        } else {
            // Main登録
            DB::table('Main')
            ->insert([
                "reservation_date" => $date[0],
            ]);

            // Day登録
            $day_data = [
                [
                    "reservation_date" => $date[0],
                    "reservation_time" => $date[0].' '.'10:00〜11:30',
                ],
                [
                    "reservation_date" => $date[0],
                    "reservation_time" => $date[0].' '.'13:00〜14:30',
                ],
                [
                    "reservation_date" => $date[0],
                    "reservation_time" => $date[0].' '.'16:00〜17:30',
                ]
            ];

            DB::table('Day')->insert($day_data);


            // 上限の数だけTime登録
            $time_data = [];

            for ($x=0; $x<=$max1-1; $x++) {
                array_push($time_data, ["reservation_time" => $date[0].' '.'10:00〜11:30', "reservation_max" => $max1]);
            }

            for ($x=0; $x<=$max2-1; $x++) {
                array_push($time_data, ["reservation_time" => $date[0].' '.'13:00〜14:30', "reservation_max" => $max2]);
            }

            for ($x=0; $x<=$max3-1; $x++) {
                array_push($time_data, ["reservation_time" => $date[0].' '.'16:00〜17:30', "reservation_max" => $max3]);
            }

            DB::table('Time')->insert($time_data);
        }
    }

    public function getDataByTime($reservation_time) {
        $reservation_no_array = DB::table('Time')
        ->where('reservation_time', $reservation_time)
        ->whereNotNull('reservation_no')
        ->pluck('reservation_no')
        ->toArray();

        if ($reservation_no_array) {
            $reservations = DB::table('Reservation')
            ->whereIn('reservation_no', $reservation_no_array)
            ->where('cancel','false')
            ->get();
        } else {
            $reservations = [];
        }
        
        return $reservations;
    }

    public function executeCancel($reservation_time, $reservation_no) {
        // Reservationテーブル更新(cancelフラグをtrueに変更)
        DB::table('Reservation')
        ->where('reservation_no', $reservation_no)
        ->update([
            "cancel" => "true",
            "update_date" => Carbon::now()
        ]);
        
        // Timeテーブル更新(reservation_noを空にする)
        DB::table('Time')
        ->where('reservation_time', $reservation_time)
        ->where('reservation_no', $reservation_no)
        ->update([
            "reservation_no" => null,
            "update_date" => Carbon::now()
        ]);
    }



    // 上限の数に応じてTimeテーブルのレコード数も変える(変更があった場合のみ実行する)
    private function setCount($max, $reservation_time) {
        $new_insert_data = [];

        // 更新前のmax レコードの数から判定
        $max_before = DB::table('Time')->where('reservation_time', $reservation_time)->count();

        if ($max > $max_before) {
            // 増えた分だけレコード追加
            for ($a=1; $a<=$max-$max_before; $a++) {
                array_push($new_insert_data, ["reservation_time" => $reservation_time, "reservation_max" => $max]);
            }
            DB::table('Time')->insert($new_insert_data);
        } elseif ($max < $max_before) {
            // 減った分だけレコード削除
            DB::table('Time')
            ->where('reservation_time', $reservation_time)
            ->latest('id')
            ->limit($max_before-$max)
            ->delete();
        }
    }
}
