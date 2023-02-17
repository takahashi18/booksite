@extends('layouts.aya.mypage')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;"> MyPage
                </h1>

                <div class="d-flex flex-row flex-wrap">
                    <p style="text-align: right">
                        <a href="/books">BookSite</a><br>
                    </p>
                </div>
                <div class="container">
                    <div class="text-center" style="width: 300px;margin: 20px auto;">
                        <h2 class="heading">■ アカウント情報 </h2>

                        名前　{{ $auth->name }} <br>
                        <br>
                        アドレス　{{ $auth->email }} <br>
                        <br>

                        <h2 class="heafing">■ お届け先情報</h2>

                        郵便番号 {{ $auth->postal_num }} <br>
                        <br>
                        住所 {{ $auth->address }} <br>
                        <br>
                        電話番号 {{ $auth->tel_num }} <br>
                        <br>
                        <input type="button" onclick="location.href='/profile' "value="編集">
                        <h2 class="heafing">■ 購入履歴</h2>

                        @foreach ($my_orders as $my_order)
                            タイトル： {{ $my_order->book->book_name }} <br>
                            著者： {{ $my_order->book->author->author }} <br>
                            購入部数： {{ $my_order->quantity }} <br>
                            単価： {{ number_format($my_order->book->price) }}円 <br>
                            合計金額： {{ $my_order->quantity * $my_order->book->price }}円 <br>
                            注文日： {{ $my_order->book->created_at }} <br>
                            <br>

                        <br>
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
