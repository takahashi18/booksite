@extends('layouts.aya.books')

@section('content')
    <div class="container-fluid">
        <div class="text-center" style="width: 400px;margin: 20px auto;">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:3.2em; padding:24px 0px; font-weight:bold;">購入入力画面
                </h1>

                <form action="/confirm" method="POST">
                    @csrf

                    <h2 class="heafing">■ ご購入商品情報</h2>
                    <br>
                    タイトル : {{ $book_name }}<br>

                    <br>
                    著者 : {{ $author }}<br>

                    <br>
                    金額 : {{ $price }}円 / 1冊<br>
                    <br>
                    数量 : {{ $quantity }} 冊<br>
                    <br>
                    合計金額 : {{ $total_price }}円 <br>
                    <br>

                    <h2 class="heafing">■ お届け先情報</h2>

                    名前 : {{ $user->name }} <br>
                    <br>
                    {{-- postal --}}
                    <div>
                        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                        <x-input-label for="postal_num" :value="__('Postal_num')" />
                        <x-text-input id="postal_num" name="postal_num" type="text" class="mt-1 block w-full"
                            :value="old('postal_num', $user->postal_num)" required autofocus autocomplete="postal_num"
                            onKeyUp="AjaxZip3.zip2addr('postal_num', '', 'address', 'address');" />

                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    {{-- adress --}}
                    <div>
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                            :value="old('address', $user->address)" required autofocus autocomplete="address" />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    {{-- tel --}}
                    <div>
                        <x-input-label for="tel_num" :value="__('Tel_num')" />
                        <x-text-input id="tel_num" name="tel_num" type="text" class="mt-1 block w-full"
                            :value="old('tel_num', $user->tel_num)" required autofocus autocomplete="tel_num" />
                        <x-input-error class="mt-2" :messages="$errors->get('tel_num')" />
                    </div>

                    <h2 class="heafing">■ お届け日指定</h2>
                    配送日 : <input name="order_at" type="date" min="<?php echo date('Y-m-d', strtotime('+2 day')); ?>" required /><br>
                    <br>
                    <br>
                    <br>
                </form>

                <input type="button" onclick="location.href='/books' "value="TOP"> <input type="button"
                    onclick="location.href='/confirm' "value="確認">


            </div>
        </div>
    </div>
@endsection
