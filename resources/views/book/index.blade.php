@extends('layouts.books')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">一覧</h1>
            <div class="">
                <div class="d-flex flex-row flex-wrap">
                    一覧を出したい
                </div>
                @foreach($books as $book)
                    {{$book->book_name}} <br>
                    {{$book->price}}円<br>
                    <img src="/{{$book->image}}" alt="" class="incart" >
                    <br>
                    {{$book->author_id}} <br>
                @endforeach
                {{$books->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
