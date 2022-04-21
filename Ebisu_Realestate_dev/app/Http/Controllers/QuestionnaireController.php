<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

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
        "family_size", "home_post_code", "home_post_code2", "home_prefectures", "home_manicipalities", "home_chome_address",
        "home_building_name", "years_of_residence", "housing_form", "housing_form_text", "phone_number", "email",
        "office_name", "work_post_code", "work_post_code2", "work_prefectures", "work_manicipalities", "work_chome_address",
        "work_building_name",

        "q1", "q2_1","q2_1_text", "q2_2","q2_2_text", "q2_3","q2_3_text", 
        "q3_1","q3_1_text","q3_2", "q4", 
        "q5_1", "q5_2", "q5_3","q5_4","q5_4_text",
        "q6","q6_text", "q7","q7_text", "q8","q8_text", 
        "q9_1","q9_2", "q9_1_sp","q9_2_sp", 
        "q10_1", "q10_2", "q10_3", "q10_1_sp", "q10_2_sp", "q10_3_sp",
        "q11", "q12_1",
        "q12_2", "q13"
    ];

    function show()
    {
        return view("questionnaire");
    }

    function post(Request $request)
    {
        $input = $request->only($this->formItems);
        $input_arrayq2_1 = $request->q2_1;
        $input_arrayq2_2 = $request->q2_2;
        $input_arrayq2_3 = $request->q2_3;
        $input_arrayq5_1 = $request->q5_1;
        $input_arrayq5_2 = $request->q5_2;
        $input_arrayq5_3 = $request->q5_3;
        $input_arrayq5_4 = $request->q5_4;
        //セッションに書き込む
        $request->session()->put("input", $input);
        $request->session()->put("input_arrayq2_1", $input_arrayq2_1);
        $request->session()->put("input_arrayq2_2", $input_arrayq2_2);
        $request->session()->put("input_arrayq2_3", $input_arrayq2_3);
        $request->session()->put("input_arrayq5_1", $input_arrayq5_1);
        $request->session()->put("input_arrayq5_2", $input_arrayq5_2);
        $request->session()->put("input_arrayq5_3", $input_arrayq5_3);
        $request->session()->put("input_arrayq5_4", $input_arrayq5_4);
        return redirect()->action([QuestionnaireController::class, 'confirm']);
    }
    

    function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("input");
        $input_arrayq2_1 = $request->session()->get("input_arrayq2_1");
        $input_arrayq2_2 = $request->session()->get("input_arrayq2_2");
        $input_arrayq2_3 = $request->session()->get("input_arrayq2_3");
        $input_arrayq5_1 = $request->session()->get("input_arrayq5_1");
        $input_arrayq5_2 = $request->session()->get("input_arrayq5_2");
        $input_arrayq5_3 = $request->session()->get("input_arrayq5_3");
        $input_arrayq5_4 = $request->session()->get("input_arrayq5_4");
        //セッションに値が無い時はフォームに戻る
        // if (!$input) {
        //     return redirect()->action([QuestionnaireController::class, 'show']);
        // }
        // return view("questionnaire_mail", ["input" => $input]);
        return view("questionnaire_confirm", compact('input','input_arrayq2_1','input_arrayq2_2','input_arrayq2_3','input_arrayq5_1','input_arrayq5_2','input_arrayq5_3','input_arrayq5_4'));
    }

    function send(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("input");
        $input_arrayq2_1 = $request->session()->get("input_arrayq2_1");
        $input_arrayq2_2 = $request->session()->get("input_arrayq2_2");
        $input_arrayq2_3 = $request->session()->get("input_arrayq2_3");
        $input_arrayq5_1 = $request->session()->get("input_arrayq5_1");
        $input_arrayq5_2 = $request->session()->get("input_arrayq5_2");
        $input_arrayq5_3 = $request->session()->get("input_arrayq5_3");
        $input_arrayq5_4 = $request->session()->get("input_arrayq5_4");

        $date = Carbon::now(); 
        $no = $date->format('YmdHis');
        $request->session()->put("no", $no);

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([QuestionnaireController::class, 'show']);
        }
        
        // 管理者宛
        Mail::send('questionnaire_site_mail', 
        compact('date', 'no', 'input','input_arrayq2_1','input_arrayq2_2','input_arrayq2_3','input_arrayq5_1','input_arrayq5_2','input_arrayq5_3','input_arrayq5_4'), 
        function ($message) {
            $to = ['ynakano7621@gmail.com', 'nanokana44@gmail.com'];
            // $to = ['y.nakano.carecon@gmail.com','keisuke.ueda@field-up.work', 'quarter_back1s0regashi@hotmail.co.jp', 'tsuchiya@advns.co.jp'];
            $no = session()->get("no");
            $message->to($to)->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」お住まいについてのアンケートフォームから");
        });
        // クライアント宛
        Mail::send('questionnaire_client_mail', 
        compact('input', 'no', 'input_arrayq2_1','input_arrayq2_2','input_arrayq2_3','input_arrayq5_1','input_arrayq5_2','input_arrayq5_3','input_arrayq5_4'), 
        function ($message) {
            $input = session()->get("input");
            $no = session()->get("no");
            $message->to($input['email'])->subject("[受付番号{$no}]  株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」お住まいについてのアンケートフォームから");
        });
        //セッションを空にする
        $request->session()->forget("input");
        $request->session()->forget("input_arrayq2_1");
        $request->session()->forget("input_arrayq2_2");
        $request->session()->forget("input_arrayq2_3");
        $request->session()->forget("input_arrayq5_1");
        $request->session()->forget("input_arrayq5_2");
        $request->session()->forget("input_arrayq5_3");
        $request->session()->forget("input_arrayq5_4");
        $request->session()->forget("no");

        return redirect()->action([QuestionnaireController::class, 'complete']);
    }

    function complete()
    {
        return view("questionnaire_complete");
    }
}
