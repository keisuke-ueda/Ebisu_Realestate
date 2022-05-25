<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfoSet extends Model
{
    public function getAll() {
        $all_info = DB::table('Info')->get();
        return $all_info;
    }

    public function getById($info_id) {
        $info = DB::table('Info')->where('id', $info_id)->get()->first();
        return $info;
    }

    public function insertData($info) {
        DB::table('Info')->insert([
            'date' => $info['date'],
            'summary' => $info['summary'],
            'content' => $info['content'],
            'status' => $info['status'],
            'new' => $info['new'],
        ]);
    }

    public function updateData($id, $info) {
        DB::table('Info')
        ->where('id', $id)
        ->update([
            'date' => $info['date'],
            'summary' => $info['summary'],
            'content' => $info['content'],
            'status' => $info['status'],
            'new' => $info['new'],
            'update_date' => Carbon::now()
        ]);
    }

    public function deleteData($id) {
        DB::table('Info')->where('id', $id)->delete();
    }
}
