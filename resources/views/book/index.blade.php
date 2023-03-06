@extends('layouts.aya.books')

@section('content')
    <div class="text-center" style="width: 400px;margin: 20px auto;">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">BookSite</h1>
            {{-- search option --}}
            <div class="container-fluid">
                <form class="d-flex" action="" method="GET">
                    <input class="form-control me-2" type="text" name="keyword" value="{{ $keyword }}">
                    <button class="btn btn-outline-success" type="submit">🔍</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row center">
            {{-- all books date --}}
            @foreach ($books as $book)
            <div class="col-xs-6 col-sm-5 col-md-4 g-5">
                <div class="card" style="width: 15rem;">
                        <img src="{{ asset('/storage/image/' . $book->image) }}" width="235" height=""
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
    <br>
    <br>


    {{-- pagenation --}}

    <ul class="pagination justify-content-center">
        {{ $books->appends(request()->query())->links('pagination::bootstrap-4') }}
    </ul>
@endsection
