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

            $record = DB::table('Main')->where('reservation_date', $date[0])->get()->first();
            if (!empty($record)) {

                $record1 = DB::table('Time')->where('reservation_time', $date[0].' '.'10:00〜11:30')->get()->first();
                if(!empty($record1)) {
                    $max1 = $record1->reservation_max;
                    $count1 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'10:00〜11:30')->count();
                    if ($max1-$count1 == $max1) {
                        $availability1 = "余裕あり";
                    } elseif ($max1-$count1 > 0) {
                        $availability1 = "残りわずか";
                    } else {
                        $availability1 = "予約不可";
                    }
                } else {
                    $availability1 = "予約不可";
                }

                $record2 = DB::table('Time')->where('reservation_time', $date[0].' '.'13:00〜14:30')->get()->first();
                if(!empty($record2)) {
                    $max2 = $record2->reservation_max;
                    $count2 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'13:00〜14:30')->count();
                    if ($max2-$count2 == $max2) {
                        $availability2 = "余裕あり";
                    } elseif ($max2-$count2 > 0) {
                        $availability2 = "残りわずか";
                    } else {
                        $availability2 = "予約不可";
                    }
                } else {
                    $availability2 = "予約不可";
                }

                $record3 = DB::table('Time')->where('reservation_time', $date[0].' '.'16:00〜17:30')->get()->first();
                if(!empty($record3)) {
                    $max3 = $record3->reservation_max;
                    $count3 = DB::table('Time')->whereNotNull('reservation_no')->where('reservation_time', $date[0].' '.'16:00〜17:30')->count();
                    if ($max3-$count3 == $max3) {
                        $availability3 = "余裕あり";
                    } elseif ($max3-$count3 > 0) {
                        $availability3 = "残りわずか";
                    } else {
                        $availability3 = "予約不可";
                    }
                } else {
                    $availability3 = "予約不可";
                }
            } else {
                $availability1 = "予約対象外";
                $availability2 = "予約対象外";
                $availability3 = "予約対象外";
            }

            $date[3] = [$availability1, $availability2, $availability3];
            array_push($weeks_modified, $date);
        }

        return $weeks_modified;
    }

    
    public function makeReservation($reservation_no, $reservation_date, $reservation_time, $input) {
        
        if ($input["gender"] == "male") {
            $seibetsu = "男性";
        } else {
            $seibetsu = "女性";
        }

        if (empty($input["home_building_name"])) {
            $address = $input["home_post_code"].'-'.$input["home_post_code2"].' '.$input["home_prefectures"].' '.$input["home_manicipalities"].' '.$input["home_chome_address"];
        } else {
            $address = $input["home_post_code"].'-'.$input["home_post_code2"].' '.$input["home_prefectures"].' '.$input["home_manicipalities"].' '.$input["home_chome_address"].' '.$input["home_building_name"];
        }

        DB::table('Reservation')
        ->insert([
            "reservation_no" => $reservation_no,
            "name" => $input['sei'].' '.$input['mei'].'('.$input['sei_kana'].' '.$input['mei_kana'].')',
            "gender" => $seibetsu,
            "birth" => $input['birth_y'].'年'.$input['birth_m'].'月'.$input['birth_d'].'日',
            "email" => $input['email'],
            "address" => $address,
            "phone" => $input['phone_number'],
            "remarks" => $input['remarks']
        ]);

        $time = DB::table('Time')
        ->where('reservation_time', $reservation_date.' '.$reservation_time)
        ->whereNull('reservation_no')
        ->limit(1)
        ->update([
            "reservation_no" => $reservation_no,
            "update_date" => Carbon::now()
        ]);
    }
}
