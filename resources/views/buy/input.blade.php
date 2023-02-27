@extends('layouts.aya.books')

@section('content')

    <div class="d-flex justify-content-center">
        <div style="background-color:rgb(255, 255, 255);padding:30px;">
            <div class="container">
                <div class="card mb-6" style="width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
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
                                郵便番号 :{{ $user->postal_num }}<br>
                                <br>
                                住所 :{{ $user->address }}<br>
                                <br>

                                <input type="submit" onclick="location.href='/profile'" value="編集">
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div style="background-color:rgb(255, 255, 255);padding:30px;">
            <div class="container">
                <div class="card mb-6" style="width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
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

                                    <div class="mb-2">
                                        <label class="col-md-4 col-form-label text-md-right">購入部数選択</label>
                                        <select class="form-control" name="quantity">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div style="background-color:rgb(255, 255, 255);padding:30px;">
            <div class="container">
                <div class="card mb-6" style="width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="heafing">■ お届け日指定</h2>

                                配送日 : <input name="delivery_at" type="date" min="<?php echo date('Y-m-d', strtotime('+2 day')); ?>"><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" onclick="location.href='/confirm/{{ $book->id }}'" value="確認">
        </form>
    </div>


@endsection
