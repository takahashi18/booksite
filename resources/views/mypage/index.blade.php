@extends('layouts.aya.mypage')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;"> MyPage
                </h1>

                <div class="d-flex flex-row flex-wrap">
                    <p style="text-align: right">
                        <a href="/books">BookSite</a><br>
                    </p>
                </div>
                <div class="container">
                    <div class="text-center" style="width: 300px;margin: 20px auto;">
                        <h2 class="heading">■ アカウント情報 </h2>
                        名前 {{ $user->name }} <br>
                        アドレス {{ $user->email }} <br>
                        <input type="button" onclick="location.href='/profile' "value="編集">

                        <h2 class="heafing">■ お届け先情報</h2>
                        郵便番号 {{ $user->l}} <br>
                        住所 {{ $user->l}} <br>
                        電話番号 {{ $user->l}} <br>
                        <input type="button" onclick="location.href='/' "value="編集">

                        {{-- <!-- ▼郵便番号入力フィールド(7桁) -->
                        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                        郵便番号（半角７桁）<input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');"> <br>
                        <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                        住所１<input type="text" name="addr11" size="60"> --}}

                        <h2 class="heafing">■ 購入履歴</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
