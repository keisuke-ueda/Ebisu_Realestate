<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EntryController extends Controller
{
    private $formItems = [
        "sei", "mei", "sei_kana", "mei_kana", "gender", "birth_y",  "birth_m",  "birth_d",
        "email", "home_post_code", "home_prefectures", "home_manicipalities", "home_chome_address",
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

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([EntryController::class, 'show']);
        }

        //ここでメールを送信するなどを行う
        $data = [];

        Mail::send('mail', $data, function ($message) {
            $message->to('y.nakano.carecon@gmail.com', 'Test')->subject('This is a test mail(entry)');
        });
        //セッションを空にする
        $request->session()->forget("input");

        return redirect()->action([EntryController::class, 'complete']);
    }

    function complete()
    {
        return view("entry_complete");
    }
}
