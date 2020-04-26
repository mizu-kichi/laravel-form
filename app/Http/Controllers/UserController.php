<?php

namespace App\Http\Controllers;

use App\Eloquents\User;
use App\Eloquents\Prefecture;
use App\Eloquents\FavoriteFood;
use App\Eloquents\UserFavoriteFood;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    /**
     * 入力画面
     */
    public function input()
    {
        $prefectures = Prefecture::get()->pluck('name', 'id')->prepend('選択してください', '');
        $favorite_foods = FavoriteFood::get();


        return View('user.input', compact('prefectures', 'favorite_foods'));
    }

    /**
     * 確認画面
     */
    public function confirm(UserFormRequest $request)
    {
        $user = new User($request->all());
        $favorite_food_ids = $request->favorite_food_id;

        $prefecture = Prefecture::find($request->prefecture_id);

        # 好きな食べ物を選択したデータを取得
        if ($favorite_food_ids) {
            $favorite_food_name = FavoriteFood::whereIn('id', $favorite_food_ids)
                ->get()
                ->implode('name', ' / ');
        } else {
            $favorite_food_name = "未選択";
        }
        
        return View('user.confirm', compact('user', 'prefecture', 'favorite_food_ids', 'favorite_food_name'));
    }

    /**
     * フォーム登録処理
     */
    public function store(UserFormRequest $request)
    {
        $user = User::create($request->all());

        # 好きな食べ物で選択した数だけデータを保存する
        foreach ($request->favorite_food_id as $favorte_food_id) {
            UserFavoriteFood::create([
                'user_id'          => $user->id,
                'favorite_food_id' => $favorte_food_id,
            ]);
        }

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
