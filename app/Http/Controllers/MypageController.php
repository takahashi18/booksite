<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User; //追加
use App\Models\Author;
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

        $user_id = Auth::id();
        $my_orders = Order::where('user_id',$user_id)->get();



        return view('mypage.index', compact('auth','my_orders'));
    }

}