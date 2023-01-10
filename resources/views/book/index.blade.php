@extends('layouts.books')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">本の一覧ページ
                </h1>

                {{-- 検索機能 --}}
                <div>
                    <form action="" method="GET">
                      <input type="text" name="keyword" value="">
                      <input type="submit" value="検索">
                    </form>

                    {{-- priceソート機能 --}}
                    <select name="price">
                        <option value="asc">安い順</option>
                        <option value="desc">高い順</option>
                    </select>

                  </div>

                {{-- mypage link --}}
                    <div class="d-flex flex-row flex-wrap">
                        <p style="text-align: right">
                            <a href="/mypage">MYPAGE</a><br>
                        </p>

                        <div class="text-center" style="width: 300px; margin:100px auto;">
                        {{-- all books date --}}
                            @foreach ($books as $book)
                                <img src="{{ asset('/storage/image/' . $book->image) }}" width="300" height=""
                                    alt="画像" class="incart"><br>
                                <a href="/book/{{ $book->id }}">{{ $book->book_name }}</a> <br>
                                {{ $book->author_id }} <br>
                                {{ $book->price }}円<br>
                                <br>
                                <br>
                            @endforeach

                            {{-- pagenation --}}
                                <div class="text-center" style="width: 50px;margin: 20px auto;">

                                {{ $books->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
