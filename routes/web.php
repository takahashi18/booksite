<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\MypageController;
use App\Models\Book;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//Breeze 追加機能

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () { //ログインしていれば表示・していなければログインページ
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //追加：MyPageController
    Route::get('/mypage', [MypageController::class, 'index'])->name('mypage.idex'); //マイページ表示
    Route::get('/mypageedit', [MypageController::class, 'edit'])->name('mypage.edit'); //マイページ編集
    //追加：BookController
    Route::get('/buy', [BookController::class, 'input'])->name('buy.input'); //購入入力ページ
    Route::post('/buy', [BookController::class, 'input'])->name('buy.input'); //購入入力ページ
    Route::get('/confirm',[BookController::class, 'confirm'] )->name('buy.confirm2'); //購入確認画面
    Route::post('/confirm',[BookController::class, 'confirm2'] )->name('buy.confirm'); //購入確認画面
    Route::get('/order',[BookController::class, 'complete'] )->name('buy.complete');
});

require __DIR__ . '/auth.php';

//追加

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'index')->name('book.index'); //一覧画面
    Route::get('/book/{id}', 'show')->name('book.show'); //詳細画面
});