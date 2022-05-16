<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reserve extends Model
{
    public function reserve() {
        $main = DB::table('Main');
        $date = Carbon::now();
        $main->insert([
            'reservation_date' => $date->format('Y/m/d'),
            'create_date' => $date
        ]);
    }
}
