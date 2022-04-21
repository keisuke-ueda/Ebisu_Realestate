<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

class EntryController extends Controller
{
    private $formItems = [
        "sei", "mei", "sei_kana", "mei_kana", "gender", "birth_y",  "birth_m",  "birth_d",
        "email", "home_post_code", "home_post_code2", "home_prefectures", "home_manicipalities", "home_chome_address",
        "home_building_name", "phone_number", "job", "income", "fund", "purpose", "type", "family",
        "area", "ldk", "price", "media"
    ];

    function show()
    {
        return view("entry");
    }

    function post(Request $request)
    {
        $input = $request->only($this->formItems);
        $input_array_ldk = $request->ldk;
        //セッションに書き込む
        $request->session()->put("input", $input);
        $request->session()->put("input_array_ldk", $input_array_ldk);
        return redirect()->action([EntryController::class, 'confirm']);
    }
    

    function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("input");
        $input_array_ldk = $request->session()->get("input_array_ldk");
        //セッションに値が無い時はフォームに戻る
        // if (!$input) {
        //     return redirect()->action([entryController::class, 'show']);
        // }
        // return view("entry_mail", ["input" => $input]);
        return view("entry_confirm", compact('input','input_array_ldk'));
    }

    function send(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("input");
        $input_array_ldk = $request->session()->get("input_array_ldk");
        $email = $input['email'];
        $date = Carbon::now(); 
        $no = $date->format('YmdHis');
        $request->session()->put("no", $no);

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([EntryController::class, 'show']);
        }

        // 管理者宛
        Mail::send('entry_site_mail', compact('date','no','input','input_array_ldk'), function ($message) {
            $to = ['y.nakano.carecon@gmail.com','keisuke.ueda@field-up.work', 'quarter_back1s0regashi@hotmail.co.jp', 'tsuchiya@advns.co.jp'];
            // $to = ['ynakano7621@gmail.com', 'nanokana44@gmail.com'];
            $no = session()->get("no");
            $message->to($to)->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」物件エントリーフォームから");
        });
        // クライアント宛
        Mail::send('entry_client_mail', compact('input','no','input_array_ldk'), function ($message) {
            $input = session()->get("input");
            $no = session()->get("no");
            $message->to($input['email'])->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」物件エントリーフォームから");
        });
        //セッションを空にする
        $request->session()->forget("input");
        $request->session()->forget("input_array_ldk");
        $request->session()->forget("no");

        return redirect()->action([EntryController::class, 'complete']);
    }

    function complete()
    {
        return view("entry_complete");
    }
}
