<?php

namespace App\Http\Controllers;

use App\Models\Book; //追記
use App\Models\Author; //追記
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\returnValueMap;

class BookController extends Controller
{
    //一覧画面  /books
    public function index(Request $request)
    {
        //キーワードの受け取り
        $keyword = $request->input('keyword');
        //クエリ生成
        $query = Book::query();

        //もしキーワードがあたら
        if (!empty($keyword)) {
            $query->where('book_name', 'LIKE', "%{$keyword}%");
        }

        $books = $query->orderBy('created_at', 'desc')->paginate(6);


        return view('book.index', compact('books', 'keyword'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $books = Author::find($book->author_id)->books;

        return view('book.show', compact('book', 'books'));
    }

    public function input(Request $request , $id)
    {
        $book = Book::findOrFail($id);
        $price = $book->price;
        $quantity = $request->quantity;
        $total_price = $price * $quantity;
        $user = Auth::user();

        return view('buy.input', compact('user', 'quantity', 'book', 'price' , 'total_price'));
    }

    public function confirm(Request $request , $id)
    {
        $order_at = $request->order_at;

        $book = Book::findOrFail($id);
        $price = $book->price;
        $quantity = $request->quantity;
        $total_price = $price * $quantity;
        $user = Auth::user();

        return view('buy.confirm', compact('user', 'quantity', 'book', 'price' , 'total_price', 'order_at'));
    }


    public function complete()
    {
        return view('buy.complete');
    }

}