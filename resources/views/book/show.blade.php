@extends('layouts.aya.books')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px; ">
            <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">Book</h1>
            <div class="text-center" style="width: 300px;margin: 20px auto;">

                <a href="/books">BookSite</a><br>

                <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height="" alt="画像"
                    class="incart"><br>
                {{ $book->book_name }} <br>
                {{ $book->price }} 円<br>
                {{ $book->author->author }} <br>
                {{ $book->introduction }} <br>

                <form action="/buy/{{ $book->id}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">購入部数選択</label>
                        <div class="col-md-6">
                            <select class="form-control" id="quantity" name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                <input type="submit"  value="購入">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="text-center" style="width: 300px;margin: 20px auto;">

        <p>{{ $book->author->author }} の作品一覧</p>
        @foreach ($books as $book)
            <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height="" alt="画像"
                class="incart"><br>
            <a href="/book/{{ $book->id }}">{{ $book->book_name }}</a> <br>
            {{ $book->author->author }}<br>
            {{ $book->price }}円<br>
            <br>
            <br>
        @endforeach
        <br>



        <a href="/books">BookSite</a>
    </div>
    </div>
    </div>
@endsection
