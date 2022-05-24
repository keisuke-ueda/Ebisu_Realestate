<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    public function getAll() {
       $all_info = DB::table('Info')->where('status', '公開')->get();
       return $all_info;
    }
}
