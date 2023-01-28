<?php

namespace App\Http\Controllers;

use App\Models\User; //追加
use Illuminate\Support\Facades\Auth; //追加


use Illuminate\Http\Request;

class MypageController extends Controller
{
    //ログインしていない場合


    //表示
    public function index()
    {
        $user = Auth::user();
        return view('mypage.index',compact('user'));
    }

    //編集
    public function edit()
    {
    return view('mypage.edit');
    }
}