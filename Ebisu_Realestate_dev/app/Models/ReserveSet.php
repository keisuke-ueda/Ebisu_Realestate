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
            $record = DB::table('ReservationSet')->where('date', $date[0])->get()->first();
            if (!empty($record)) {
                $availability1 = $record->availability1;
                $availability2 = $record->availability2;
                $availability3 = $record->availability3;
                $date[3] = [$availability1, $availability2, $availability3];
            } else {
                $date[3] = ['対応可', '対応可', '対応可'];
            }
            array_push($weeks_modified, $date);
        }

        return $weeks_modified;
    }

    public function updateData($date, $availability1, $availability2, $availability3) {

        $time = DB::table('ReservationSet');
        $record = DB::table('ReservationSet')->where('date', $date[0])->get()->first();
        if (!empty($record)) {
            $time
            ->where('date', $date[0])
            ->update([
                "availability1" => $availability1,
                "availability2" => $availability2,
                "availability3" => $availability3,
                "update_date" => Carbon::now()
            ]);
        } else {
            $time->insert([
                "date" => $date[0],
                "availability1" => $availability1,
                "availability2" => $availability2,
                "availability3" => $availability3,
            ]);
        }

        // $upper_num = DB::table('UpperNum');
        // $record = $upper_num->where('date', $date[0])->get()->first();
    }

}
