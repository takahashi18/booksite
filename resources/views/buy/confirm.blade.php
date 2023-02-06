@extends('layouts.aya.books')

@section('content')
    <div class="container-fluid">
        <div class="text-center"  style="width: 400px;margin: 20px auto;">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">購入確認画面
                </h1>


                <h2 class="heafing">■ ご購入商品情報</h2>
                <br>
                タイトル : {{ $book_name }}<br>
                <br>
                著者 : {{ $author }}<br>
                <br>
                金額 : {{ $price }}円 / 1冊<br>
                <br>
                数量 : {{ $quantity }} 冊<br>
                <br>
                合計金額 : {{ $total_price }}円 <br>
                <br>

                <h2 class="heafing">■ お届け先情報</h2>

                名前 : {{ $user->name }} <br>
                <br>
                電話番号 : {{ $user->tel_num }} <br>
                <br>
                郵便番号 : {{ $user->postal_num }} <br>
                <br>
                住所 : {{ $user->address }} <br>
                <br>

                <h2 class="heafing">■ お届け日指定</h2>
                配送日 : {{ $order_at }}
                <br>
                <br>
                <br>
                <input type="button" onclick="history.back(-1)" value="修正"> <input type="button"
                    onclick="location.href='/order' "value="購入">


            </div>
        </div>
    </div>
@endsection
