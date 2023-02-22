@extends('layouts.aya.books')

@section('content')
    <div class="container-fluid">
        <div class="text-center" style="width: 400px;margin: 20px auto;">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">購入入力画面
                </h1>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif


                <h2 class="heafing">■ お届け先情報</h2>

                名前 : {{ $user->name }} <br>
                <br>
                電話番号 : {{ $user->tel_num }}<br>
                <br>
                <div>
                    郵便番号 :{{ $user->postal_num }}<br>
                    <br>
                    住所 :{{ $user->address }}<br>
                    <br>
                </div>
                <input type="submit" onclick="location.href='/profile'" value="編集">


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
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">購入部数選択</label>
                        <div class="col-md-6">
                            <select class="form-control"  name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <br>
                    <h2 class="heafing">■ お届け日指定</h2>

                    配送日 : <input name="delivery_at" type="date" min="<?php echo date('Y-m-d', strtotime('+2 day')); ?>" ><br>

                    <br>
                    <br>

                    <input type="submit" onclick="location.href='/confirm/{{ $book->id }}'" value="確認">

                </form>

                <input type="submit" onclick="location.href='/books' "value="TOP">

            </div>
        </div>
    </div>
@endsection
