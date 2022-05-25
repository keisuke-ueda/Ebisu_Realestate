<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top;

class TopController extends Controller
{
    public function show() {
        $model = new Top();
        $all_info = $model->getAll();

        return view('top', compact('all_info'));
    }
}
