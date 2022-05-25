<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\ReserveSet;
use Mail;
use Carbon\Carbon;
use DateTime;


class ReserveController extends Controller
{
    private $formItems = [
        "sei", "mei", "sei_kana", "mei_kana", "gender", "birth_y",  "birth_m",  "birth_d",
        "email", "home_post_code", "home_post_code2", "home_prefectures", "home_manicipalities", "home_chome_address",
        "home_building_name", "phone_number", "remarks"
    ];

    function show() {

        $days = ['日','月', '火', '水', '木', '金', '土'];

        // 本日の日付
        $today = new Datetime();
        // 翌日の日付
        $tomorrow = $today->modify("+1 days");

        // 6/11
        $point_date = new Datetime();
        $point_date->setDate(2022,6,11);

        if ($today >= $point_date) {
            $start_date = $today;
        } else {
            $start_date = $point_date;
        }

        // // start_dateから20日後
        // $after_20 = $start_date->modify('+20 days');

        // // 7/31
        // $point_date2 = new Datetime();
        // $point_date2->setDate(2022,7,31);

        // if ($after_20 > $point_date) {

        // } else {

        // }

        // 曜日
        $start_date_w = $start_date->format('w');

        if ($start_date_w == 1) {
            $day1 = $start_date;
        } elseif ($start_date_w == 2) {
            $day1 = $start_date->modify('-1 days');
        } elseif ($start_date_w == 3) {
            $day1 = $start_date->modify('-2 days');
        } elseif ($start_date_w == 4) {
            $day1 = $start_date->modify('-3 days');
        } elseif ($start_date_w == 5) {
            $day1 = $start_date->modify('-4 days');
        } elseif ($start_date_w == 6) {
            $day1 = $start_date->modify('-5 days');
        } elseif ($start_date_w == 0) {
            $day1 = $start_date->modify('-6 days');
        } 

        $weeks = [[$day1->format('Y/n/j'), $day1->format('n/j'), $days[$day1->format('w')]]];

        for ($i=0; $i<=54; $i++) {
            $day = $day1->modify("+1 days");
            array_push($weeks, [$day->format('Y/n/j'), $day->format('n/j'), $days[$day->format('w')]]);
        }

        // モデルのインスタンス化
        $model = new Reserve();
        $weeks = $model->setArray($weeks);
        $weeks = array_chunk($weeks, 7);

        return view('reserve', compact('weeks'));
    }

    function confirm(Request $request) {
        $reservation_date = $request->reservation_date;
        $reservation_date_w =$request->reservation_date_w;
        $reservation_time = $request->reservation_time;

        //セッションに書き込む
        $request->session()->put("reservation_date", $reservation_date);
        $request->session()->put("reservation_date_w", $reservation_date_w);
        $request->session()->put("reservation_time", $reservation_time);

        return view('reserve_confirm', compact('reservation_date', 'reservation_date_w', 'reservation_time'));
    }

    function confirm2(Request $request) {
        $input = $request->only($this->formItems);

        //セッションから値を取り出す
        $reservation_date = $request->session()->get("reservation_date");
        $reservation_date_w = $request->session()->get("reservation_date_w");
        $reservation_time = $request->session()->get("reservation_time");

        //セッションに書き込む
        $request->session()->put("input", $input);

        return view("reserve_confirm2", compact('input', 'reservation_date', 'reservation_date_w', 'reservation_time'));
    }

    function send(Request $request) {
        //セッションから値を取り出す
        $reservation_date = $request->session()->get("reservation_date");
        $reservation_date_w = $request->session()->get("reservation_date_w");
        $reservation_time = $request->session()->get("reservation_time");
        $input = $request->session()->get("input");
        $email = $input['email'];
        $date = Carbon::now(); 
        $no = $date->format('YmdHis');
        $request->session()->put("no", $no);

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            // return redirect()->action([ReserveController::class, 'show']);
        }

        $model = new Reserve();
        $model->makeReservation($no, $reservation_date, $reservation_time, $input);

        // 管理者宛
        Mail::send('reserve_site_mail', compact('date','no','input','reservation_date','reservation_date_w','reservation_time'), function ($message) {

            // テスト用アドレス
            $to = ['y.nakano.carecon@gmail.com','keisuke.ueda@field-up.work', 'tsuchiya@advns.co.jp'];
            $bcc = "nanokana44@gmail.com";

            // 本番アドレス
            // $to = "la-ebisu.gg@lattrait.co.jp";
            // $bcc = "digital@advns.co.jp";

            $no = session()->get("no");

            $message->to($to)->bcc($bcc)->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」来場予約から");
            // $message->to($to)->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」来場予約フォームから");
        });
        // クライアント宛
        Mail::send('reserve_client_mail', compact('input','no','reservation_date','reservation_date_w','reservation_time'), function ($message) {
            $input = session()->get("input");
            $no = session()->get("no");
            $message->to($input['email'])->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」来場予約から");
        });

        //セッションを空にする
        $request->session()->forget("input");
        $request->session()->forget("no");
        $request->session()->forget("reservation_date");
        $request->session()->forget("reservation_date_w");
        $request->session()->forget("reservation_time");

        return redirect()->action([ReserveController::class, 'complete']);
    }

    function complete()
    {
        return view("reserve_complete");
    }
}
