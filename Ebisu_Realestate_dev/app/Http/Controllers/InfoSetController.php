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
        if ($request->password == env('INFO_SET_PASS')) {
            //セッションに書き込む
            $request->session()->put("password", $request->password);
            return redirect()->action([InfoSetController::class, 'show']);
        } else {
            return redirect()->action([InfoSetController::class, 'login_redirect']);
        }
    }

    function show(Request $request) {
        $password = $request->session()->get("password");
        if (!$password) {
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
        $request->session()->forget("password");
        return redirect()->action([InfoSetController::class, 'login_redirect']);
    }
}
