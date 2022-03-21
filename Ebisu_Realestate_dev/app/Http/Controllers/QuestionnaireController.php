<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\QuestionnaireMail;

class QuestionnaireController extends Controller
{
    public function send(Request $request) {
        // $name = $request['name'];
        $name = "中野 洋";
        $title = "メール送信テスト";
        Mail::send(new QuestionnaireMail($name, $title));
        return redirect('/questionnaire');
    }
}
