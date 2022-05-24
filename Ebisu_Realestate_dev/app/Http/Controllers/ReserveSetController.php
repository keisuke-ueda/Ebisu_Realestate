<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReserveSet;
use DateTime;
use Illuminate\Pagination\LengthAwarePaginator;

class ReserveSetController extends Controller
{
    function login_redirect() {
        return view('reserve_set_login');
    }

    function login(Request $request) {
        if ($request->password == env('RESERVE_SET_PASS')) {
            //セッションに書き込む
            $request->session()->put("password", $request->password);
            return redirect()->action([ReserveSetController::class, 'show']);
        } else {
            return redirect()->action([ReserveSetController::class, 'login_redirect']);
        }
    }


    function show(Request $request) {
        $password = $request->session()->get("password");
        if (!$password) {
            return redirect()->action([ReserveSetController::class, 'login_redirect']);
        }

        $weeks = $this->setWeeks();

        // モデルのインスタンス化
        $model = new ReserveSet();
        $weeks = $model->setArray($weeks);

        //セッションに書き込む
        $request->session()->put("weeks", $weeks);

        return view('reserve_set', compact('weeks'));
    }


    function edit(Request $request) {
        // 管理画面(ログイン直後のやつ)から遷移してきた時
        $weeks = $request->session()->get("weeks");

        if (!$weeks) {
            return redirect()->action([ReserveSetController::class, 'show']);
        }

        // 予約情報詳細ページから遷移してきた時
        if (isset($request->reshow)) {
            $weeks = $this->setWeeks();
            $model = new ReserveSet();
            $weeks = $model->setArray($weeks);
        }

        return view('reserve_set_edit', compact('weeks'));
    }

    function update(Request $request) {
        $weeks = $request->session()->get("weeks");
        $i = 0;
        foreach ($weeks as $date) {
            $max1 = $_POST["max1_".$i];
            $max2 = $_POST["max2_".$i];
            $max3 = $_POST["max3_".$i];

            $model = new ReserveSet();
            $model->updateData($date, $max1, $max2, $max3);
            $i++;
        }

        $model = new ReserveSet();
        $weeks = $model->setArray($weeks);
        $request->session()->put("weeks", $weeks);
        
        return view('reserve_set', compact('weeks'));
    }

    function showReservation(Request $request) {
        $reservation_time = $request->reservation_time;
        $model = new ReserveSet();
        $reservations = $model->getDataByTime($reservation_time);

        return view('reservation_show', compact('reservation_time','reservations'));
    }

    function cancelReservation(Request $request) {
        $reservation_time = $request->reservation_time;
        $reservation_no = $request->reservation_no;
        $model = new ReserveSet();
        $model->executeCancel($reservation_time, $reservation_no);
        $reservations = $model->getDataByTime($reservation_time);

        return view('reservation_show', compact('reservation_time','reservations'));     
    }


    function logout(Request $request) {
        $request->session()->forget("password");
        $request->session()->forget("weeks");
        return redirect()->action([ReserveSetController::class, 'login_redirect']);
    }


    private function setWeeks() {
        $days = ['日','月', '火', '水', '木', '金', '土'];

        // 本日の日付
        $today = new Datetime();
        // 翌日の日付
        $tomorrow = $today->modify("+1 days");

        // 6/11
        $point_date = new Datetime();
        $point_date->setDate(2022,6,11);

        if ($today >= $point_date) {
            $start_date = $tomorrow;
        } else {
            $start_date = $point_date;
        }

        $weeks = [[$start_date->format('Y/n/j'), $start_date->format('n/j'), $days[$start_date->format('w')]]];

        for ($i=0; $i<=58; $i++) {
            $day = $start_date->modify("+1 days");
            array_push($weeks, [$day->format('Y/n/j'), $day->format('n/j'), $days[$day->format('w')]]);
        }

        return $weeks;
    }
}
