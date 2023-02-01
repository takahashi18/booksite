<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    //購入入力画面  /buy
    public function input()
    {
        return view('book.input');
    }

    //購入確認画面  /confirm
    public function confirm()
    {
        return view('book.confirm');
    }

    //購入完了  /compleate
}