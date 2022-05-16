<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;


class ReserveController extends Controller
{
    function reserve() {
        $reserve = new Reserve();
        $reserve->reserve();
        return view('reserve');
    }

    function confirm() {
        return view('reserve_confirm');
    }
}
