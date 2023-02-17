@extends('layouts.aya.books')

@section('content')
    <div class="container-fluid">
        <div class="text-center" style="width: 400px;margin: 20px auto;">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">購入入力画面
                </h1>

                <form action="/confirm/{{ $book->id }}" method="POST">
                    @csrf

                    <h2 class="heafing">■ ご購入商品情報</h2>
                    <br>
                    タイトル : {{ $book->book_name }}<br>
                    <br>
                    著者 : {{ $book->author->author }}<br>
                    <br>
                    金額 : {{ $price }}円 / 1冊<br>
                    <br>
                    数量 : <input type="hidden" name="quantity" value="{{ $quantity }}" /> {{ $quantity }}冊<br>
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


                    <input type="submit" onclick="location.href='/profile' " value="編集">

                    <h2 class="heafing">■ お届け日指定</h2>

                    配送日 : <input name="delivery_at" type="date" min="<?php echo date('Y-m-d', strtotime('+2 day')); ?>" required="required" /><br>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                    <input type="submit" onclick="location.href='/books' "value="TOP">
                    <input type="submit" onclick="location.href='/confirm/{{ $book->id }}'" value="確認" >
                </form>


            </div>
        </div>
    </div>
@endsection
