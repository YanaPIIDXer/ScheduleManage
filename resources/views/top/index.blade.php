@extends("layouts/view")

@section("Content")
<h1 class="text-center">スケジュール管理システム</h1>
<div class="text-center">
    <a href="{{ url('/login') }}">ログイン</a><br />
    <a href="{{ url('/register') }}">ユーザ登録</a><br />
</div>
@endsection