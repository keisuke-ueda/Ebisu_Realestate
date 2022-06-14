<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
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

    private $days =  ['日','月', '火', '水', '木', '金', '土'];


    function show() {
        $weeks = $this->setWeeks();

        $start_date = $weeks[1];
        $start_date_w = $start_date->format('w');
        $start_date = $start_date->format('Y/n/j'.'('.$this->days[$start_date_w].')');

        $end_date = $weeks[2];
        $end_date_w = $end_date->format('w');
        $end_date = $end_date->format('Y/n/j'.'('.$this->days[$end_date_w].')');

        // モデルのインスタンス化
        $model = new Reserve();
        $weeks = $model->setArray($weeks[0]);
        $weeks = array_chunk($weeks, 7);

        return view('reserve', compact('weeks','start_date','end_date'));
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
        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([ReserveController::class, 'show']);
        }
        $email = $input['email'];
        $date = Carbon::now(); 
        $no = $date->format('YmdHis');
        $request->session()->put("no", $no);

        $model = new Reserve();
        $model->makeReservation($no, $reservation_date, $reservation_time, $input);

        // 管理者宛
        Mail::send('reserve_site_mail', compact('date','no','input','reservation_date','reservation_date_w','reservation_time'), function ($message) {

            // テスト用アドレス
            // $to = ['y.nakano.carecon@gmail.com','keisuke.ueda@field-up.work', 'tsuchiya@advns.co.jp'];
            $to = 'ynakano7621@gmail.com';
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
        $request->session()->regenerateToken();
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


    private function setWeeks() {

        // 本日の日付
        $today = new Datetime();
        // 翌日の日付
        $tomorrow = $today->modify("+1 days");

        // 6/11
        $date611 = new Datetime();
        $date611->setDate(2022,6,11);

        // 7/31
        $date731 = new Datetime();
        $date731->setDate(2022,7,31);

        // 予約可能の初日を判定
        if ($tomorrow >= $date611) {
            $start_date = $tomorrow;
        } else {
            $start_date = $date611;
        }

        // 初日の曜日
        $start_date_w = $start_date->format('w');

        // カレンダーに表示される初日を判定
        $day1 = clone $start_date;

        if ($start_date_w == 1) {

        } elseif ($start_date_w == 2) {
            $day1 = $day1->modify('-1 days');
        } elseif ($start_date_w == 3) {
            $day1 = $day1->modify('-2 days');
        } elseif ($start_date_w == 4) {
            $day1 = $day1->modify('-3 days');
        } elseif ($start_date_w == 5) {
            $day1 = $day1->modify('-4 days');
        } elseif ($start_date_w == 6) {
            $day1 = $day1->modify('-5 days');
        } elseif ($start_date_w == 0) {
            $day1 = $day1->modify('-6 days');
        } 

        if ($start_date_w == 1) {
            $period = "期間内";
        } else {
            $period = "期間外";
        }


        // 20日後
        $start_date_copy = clone $start_date;
        $after_20 = $start_date_copy->modify('+20 days');

        // 予約可能の最終日を判定
        if ($after_20 >= $date731) {
            $end_date = $after_20;
        } else {
            $end_date = $date731;
        }

        // 最終日の曜日
        $end_date_w = $end_date->format('w');

        // カレンダーに表示される最終日を判定
        $day28 = clone $end_date;
        if ($end_date_w == 1) {
            $day28 = $day28->modify('+6 days');
        } elseif ($end_date_w == 2) {
            $day28 = $day28->modify('+5 days');
        } elseif ($end_date_w == 3) {
            $day28 = $day28->modify('+4 days');
        } elseif ($end_date_w == 4) {
            $day28 = $day28->modify('+3 days');
        } elseif ($end_date_w == 5) {
            $day28 = $day28->modify('+2 days');
        } elseif ($end_date_w == 6) {
            $day28 = $day28->modify('+1 days');
        } elseif ($end_date_w == 0) {

        }

        $day_count = $day1->diff($day28)->days + 1;

        $weeks = [[$day1->format('Y/n/j'), $day1->format('n/j'), $this->days[$day1->format('w')], $period]];

        for ($i=1; $i<=$day_count-1; $i++) {
            $day = $day1->modify("+1 days");

            if ($day <= $end_date) {
                $period = "期間内";
            } else {
                $period = "期間外";
            }

            array_push($weeks, [$day->format('Y/n/j'), $day->format('n/j'), $this->days[$day->format('w')], $period]);
        }

        return [$weeks, $start_date, $end_date];
    }
}
