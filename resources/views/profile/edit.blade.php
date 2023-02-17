<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
{{-- mypageに戻る：追加 --}}
    <div class="d-flex flex-row flex-wrap">
        <p style="text-align: right">
            <a  href="/mypage">▶MyPage </a>  <a href="/books">▶BookSite </a><br>
        </p>
    </div>
{{-- なまえ・アドレス変更 --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
{{-- パスワード変更 --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
{{-- アカウント削除 --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row flex-wrap">
        <p style="text-align: right">
            <a href="/books">BookSite</a><br>
        </p>
    </div>

</x-app-layout>
