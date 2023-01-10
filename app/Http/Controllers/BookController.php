<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnValueMap;

class BookController extends Controller
{
    //一覧画面
    public function index(Request $request)
    {
        $books = DB::table('books')->paginate(6);
        return view('book.index', compact('books'));
    }

    //詳細画面
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('book.show')->with('book',$book);
    }
}