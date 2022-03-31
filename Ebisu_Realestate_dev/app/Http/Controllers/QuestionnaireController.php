<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class QuestionnaireController extends Controller
{
    // public function send(Request $request)
    // {

    //     // $name = $request['name'];
    //     $name = "中野 洋";
    //     $title = "メール送信テスト";
    //     Mail::send(new QuestionnaireMail($name, $title));
    //     return redirect('/questionnaire');
    // }

    private $formItems = [
        "sei", "mei", "sei_kana", "mei_kana", "gender", 
        "family_size", "home_post_code", "home_prefectures", "home_manicipalities", "home_chome_address",
        "home_building_name", "years_of_residence", "housing_form", "phone_number", "email",
        "office_name", "work_post_code", "work_prefectures", "work_manicipalities", "work_chome_address",
        "work_building_name"
    ];

    function show()
    {
        return view("questionnaire");
    }

    function post(Request $request)
    {

        $input = $request->only($this->formItems);
        //セッションに書き込む
        $request->session()->put("form_input", $input);

        return redirect()->action([QuestionnaireController::class, 'confirm']);
    }

    function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([QuestionnaireController::class, 'show']);
        }
        return view("questionnaire_mail", ["input" => $input]);
    }

    function send(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([QuestionnaireController::class, 'show']);
        }

        //ここでメールを送信するなどを行う
        $data = [];

        Mail::send('mail', $data, function ($message) {
            $message->to('himaji.megido@gmail.com', 'Test')->subject('This is a test mail');
        });
        //セッションを空にする
        $request->session()->forget("form_input");

        return redirect()->action([QuestionnaireController::class, 'complete']);
    }

    function complete()
    {
        return view("questionnaire_complete");
    }

}
