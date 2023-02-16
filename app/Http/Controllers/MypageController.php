<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User; //追加
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\Redirect; //追加
use Illuminate\Http\Request;


class MypageController extends Controller
{
    //ログインしていない場合


    //表示
    public function index()
    {
        $auth= Auth::user();


        return view('mypage.index', compact('auth'));
    }

    /*
        //編集

    public function edit(Request $request)
    {
        return view('mypage.edit', [
            'user' => $request->user(),
        ]);
    }

    //更新

    public function update(Request $request)
    {
        $request->user()->fill($request->validated());
        // News Modelからデータを取得する
        $news = News::find($request->id);
        // 送信されてきたフォームデータを格納する
        $news_form = $request->all();
        unset($news_form['_token']);

        // 該当するデータを上書きして保存する
        $news->fill($news_form)->save();

        return redirect('admin/news');
    }

    //編集

    public function edit(Request $request)
    {
        return view('mypage.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->fill($request->validated());
        $request->user()->save();

        return redirect('mypage.index');
    }
    */

}