<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSet;

class InfoSetController extends Controller
{
    function login_redirect() {
        return view('info_set_login');
    }

    function login(Request $request) {
        if (($request->password == env('INFO_SET_PASS')) && ($request->id == env('INFO_SET_ID'))) {
            //セッションに書き込む
            $request->session()->put("info_set_id", $request->id);
            $request->session()->put("info_set_password", $request->password);
            return redirect()->action([InfoSetController::class, 'show']);
        } else {
            return redirect()->action([InfoSetController::class, 'login_redirect']);
        }
    }

    function show(Request $request) {
        $info_set_id = $request->session()->get("info_set_id");
        $info_set_password = $request->session()->get("info_set_password");
        if (!$info_set_password || !$info_set_id) {
            return redirect()->action([InfoSetController::class, 'login_redirect']);
        }

        // モデルのインスタンス化
        $model = new InfoSet();
        $all_info = $model->getAll();

        return view('info_set', compact('all_info'));
    }


    function edit(Request $request) {
        if (isset($request->info_id)) {
            $info_id = $request->info_id;
            $model = new InfoSet();
            $info = $model->getById($info_id);

            return view('info_set_edit', compact('info'));
        } else {
            return view('info_set_edit');
        }
    }

    function update(Request $request) {
        $model = new InfoSet();

        $info = [
            'date'=> $request->date,
            'summary' => $request->summary,
            'content' => $request->content,
            'status' => $request->status,
            'new' => $request->new,
        ];

        if ($request->action == "create") {
            $model->insertData($info);
        } elseif ($request->action == "update" && isset($request->id)) {
            $id = $request->id;
            $model->updateData($id, $info);
        }

        return redirect()->action([InfoSetController::class, 'show']);
    }

    function delete(Request $request) {
        $id = $request->id;
        $model = new InfoSet();
        $model->deleteData($id);

        return redirect()->action([InfoSetController::class, 'show']);
    }

    function logout(Request $request) {
        $request->session()->forget("info_set_id");
        $request->session()->forget("info_set_password");
        return redirect()->action([InfoSetController::class, 'login_redirect']);
    }
}
