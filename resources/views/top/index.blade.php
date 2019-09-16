@extends("layouts/view")

@section("Content")
<h1>スケジュール管理システム</h1>
<a href="{{ url('/login') }}">ログイン</a><br />
<a href="{{ url('/register') }}">ユーザ登録</a><br />
@endsection