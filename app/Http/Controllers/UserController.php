<?php

namespace App\Http\Controllers;

use App\Eloquents\User;
use App\Eloquents\Prefecture;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    /**
     * 入力画面
     */
    public function input()
    {
        $prefectures = Prefecture::get()->pluck('name', 'id')->prepend('選択してください', '');


        return View('user.input', compact('prefectures'));
    }

    /**
     * 確認画面
     */
    public function confirm(UserFormRequest $request)
    {
        $user = new User($request->all());
        $prefecture = Prefecture::find($request->prefecture_id);

        return View('user.confirm', compact('user', 'prefecture'));
    }

    /**
     * フォーム登録処理
     */
    public function store(UserFormRequest $request)
    {
        User::create($request->all());

        return redirect()->route('user.complete');
    }

    /**
     * 完了画面
     */
    public function complete()
    {
        return View('user.complete');
    }

    /**
     * 一覧表示
     */
    public function list()
    {
        $users = User::get();

        return View('user.list', compact('users'));
    }
}
