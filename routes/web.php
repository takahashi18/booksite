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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //oute::get('/myedit',[MypageController::class,'edit'])->name('mypage.edit'); //マイページ編集
    //Route::patch('/myedit', [MypageController::class, 'update'])->name('mypage.update');



//追加：MyPageController
    Route::get('/mypage',[MypageController::class,'index'])->name('mypage.idex'); //マイページ表示
    Route::get('/mypageedit',[MypageController::class,'edit'])->name('mypage.edit'); //マイページ編集
//追加：BuyController

    Route::get('/buy',[BuyController::class,'input'])->name('book.input'); //購入入力ページ
});

require __DIR__.'/auth.php';

//追加

Route::controller(BookController::class)->group(function(){
    Route::get('/books','index')->name('book.index'); //一覧画面
    Route::get('/book/{id}','show')->name('book.show'); //詳細画面

});

Route::controller(BuyController::class)->group( function(){
    Route::get('/confirm','confirm')->name('book.confirm'); //購入確認画面

});