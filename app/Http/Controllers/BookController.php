<?php

namespace App\Http\Controllers;

use App\Models\Book; //追記
use App\Models\Author; //追記
use App\Models\Order;
use Illuminate\Support\Facades\Auth; //追加
use App\Http\Requests\BookRequest;
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

    public function input ($id)
    {
        $book = Book::findOrFail($id);
        $price = $book->price;
        $user = Auth::user();


        return view('buy.input', compact('user',  'book', 'price' ));
    }

    public function confirm(Request $request , $id)
    {


        $validated = $request->validate([
            'delivery_at' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $price = $book->price;
        $quantity = $request->quantity;
        $total_price = $price * $quantity;
        $user = Auth::user();
        $delivery_at = $request->delivery_at;

        $request->session()->put('quantity', $quantity);
        $request->session()->put('delivery_at',$delivery_at);


        return view('buy.confirm',compact('book','price','quantity','total_price','user','delivery_at'));
    }


    public function complete(Request $request, $id)
    {
        $quantity = $request->session()->get('quantity');
        $delivery_at = $request->session()->get('delivery_at');


        $book = Book::findOrFail($id);
        $user = Auth::user();
        $user_id = Auth::id();

        $order = new Order;
        $form = $request->all();

        $order->book_id = $book->id;
        $order->quantity = $quantity;
        $order->user_id = $user->id;
        $order->delivery_at = $delivery_at;
        $order->save();


        return view('buy.complete',compact('book','quantity','user','delivery_at'));
    }

}