<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reserve extends Model
{
    public function setArray($weeks) {
        $weeks_modified = [];

        foreach ($weeks as $date) {
            $record = DB::table('ReservationSet')->where('date', $date[0])->get()->first();
            if (!empty($record)) {
                $availability1 = $record->availability1;
                $availability2 = $record->availability2;
                $availability3 = $record->availability3;
                $date[3] = [$availability1, $availability2, $availability3];
            } else {
                $date[3] = ['管理対象外', '管理対象外', '管理対象外'];
            }
            array_push($weeks_modified, $date);
        }

        return $weeks_modified;
    }

    
    public function makeReservation($reservation_no, $reservation_date, $reservation_time) {
        DB::table('Reservation')
        ->insert([
            "reservation_no" => $reservation_no,
            "reservation_date" => $reservation_date,
            "reservation_time" => $reservation_time,
        ]);

        if ($reservation_time == "10:00〜11:30") {
            DB::table('ReservationSet')
            ->where('date', $reservation_date)
            ->update([
                "availability1" => "予約あり",
                "update_date" => Carbon::now()
            ]);
        } elseif ($reservation_time == "13:00〜14:30") {
            DB::table('ReservationSet')
            ->where('date', $reservation_date)
            ->update([
                "availability2" => "予約あり",
                "update_date" => Carbon::now()
            ]);
        } elseif ($reservation_time == "16:00〜17:30") {
            DB::table('ReservationSet')
            ->where('date', $reservation_date)
            ->update([
                "availability3" => "予約あり",
                "update_date" => Carbon::now()
            ]);
        }
        
    }
}
