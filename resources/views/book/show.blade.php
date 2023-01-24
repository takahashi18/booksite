@extends('layouts.books')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">詳細ページ</h1>
                <div class="text-center" style="width: 300px;margin: 20px auto;">

                    <a href="/books">TOPへ</a><br>


                    <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height="" alt="画像"
                        class="incart"><br>
                    {{ $book->book_name }} <br>
                    {{ $book->price }} 円　<br>
                    {{ $book->author->author }} <br>
                    {{ $book->introduction }} <br>

                    <button type="submit" name="">購入</button><br>
                    <br>


                    <p>{{ $book->author->author }} の作品一覧</p>
                    @foreach ($books as $book)
                        <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height="" alt="画像" class="incart"><br>
                        <a href="/book/{{ $book->id }}">{{ $book->book_name }}</a> <br>
                        {{ $book->author->author }}<br>
                        {{ $book->price }}円<br>
                        <br>
                        <br>

                    @endforeach
                    <br>



                    <a href="/books">TOPへ</a>
                </div>
            </div>
        </div>
    </div>
@endsection
