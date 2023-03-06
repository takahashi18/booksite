@extends('layouts.aya.books')

@section('content')
    <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">Book</h1>
    <div class="d-flex justify-content-center">
        <div style="background-color:rgb(255, 255, 255);padding:50px;">
            <div class="container">
                <div class="card mb-6" style="width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height=""
                                alt="画像" class="img-fluid rounded-start"><br>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->book_name }} </h5>
                                {{ $book->price }} 円<br>
                                {{ $book->author->author }} <br>
                                {{ $book->introduction }} <br>

                                <input class="col-3" type="submit"
                                    onclick="location.href='/buy/{{ $book->id }}' "value="購入">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="container">
            <div class="row center">
                <p>{{ $book->author->author }} の作品一覧</p>
                @foreach ($books as $book)
                    <div class="col-xs-3 col-sm-3 col-md-3 g-5 ">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('/storage/image/' . $book->image) }}" width="220" height=""
                                alt="画像" class="incart"><br>
                            <div class="card-body text-center">
                                <a href="/book/{{ $book->id }}">{{ $book->book_name }}</a> <br>
                                {{ $book->author->author }}<br>
                                {{ $book->price }}円<br>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
