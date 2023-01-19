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


        $books = Book::with('author')->paginate(6);

        return view('book.index',compact('books'));
    }



    //詳細画面
    public function show($id)
    {
        //詳細表示
        $book = Book::findOrFail($id);

        //authorが持つ、booksが全部取得できる
        $author_books = Author::find($book-> author_id);

        return view('book.show',compact('book'),compact('author_books'));



    }
}