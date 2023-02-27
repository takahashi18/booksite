@extends('layouts.aya.books')

@section('content')
    <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;"> MyPage
    </h1>
    <div class="d-flex justify-content-center">
        <div style="background-color:rgb(255, 255, 255);padding:30px;">
            <div class="container text-center">
                <div class="card mb-6" style="width: 600px;">
                    <div class="row g-0">
                        <h2 class="heading">■ アカウント情報 </h2>
                        <div class="text-center">
                            名前 {{ $auth->name }} <br>
                            <br>
                            アドレス {{ $auth->email }} <br>
                            <br>

                            <h2 class="heafing">■ お届け先情報</h2>
                            郵便番号 {{ $auth->postal_num }} <br>
                            <br>
                            住所 {{ $auth->address }} <br>
                            <br>
                            電話番号 {{ $auth->tel_num }} <br>
                            <br>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <input type="button" onclick="location.href='/profile' "value="編集">
                    </div>
                </div>
<br>
<br>
                <h2 class="heafing">■ 購入履歴</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>タイトル</th>
                            <th>著者</th>
                            <th>購入部数</th>
                            <th>単価</th>
                            <th>合計金額</th>
                            <th>注文日</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($my_orders as $my_order)
                            <tr width="600">
                                <td>{{ $my_order->book->book_name }}</td>
                                <td>{{ $my_order->book->author->author }}</td>
                                <td>{{ $my_order->quantity }}</td>
                                <td>{{ $my_order->book->price }}</td>
                                <td>{{ $my_order->quantity * $my_order->book->price }}</td>
                                <td>{{ $my_order->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endsection
