<?php

namespace App\Http\Controllers;

use App\Models\Book; //追記
use App\Models\Author; //追記

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Kyslik\ColumnSortable\SortableLink;

use function PHPUnit\Framework\returnValueMap;

class BookController extends Controller
{
    //一覧画面
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

        //books = Book::with('author')->paginate(6);

        return view('book.index',compact('books','keyword'));
    }



    //詳細画面
    public function show($id)
    {
        //詳細表示
        $book = Book::findOrFail($id);

        //authorが持つ、booksが全部取得できる
        $books = Author::find($book->author_id)->books;
        return view('book.show', compact('book'), compact('books'));
    }
}