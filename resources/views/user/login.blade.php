@extends("layouts/view")

@section("Content")
<h1>スケジュール管理システム ログイン</h1>
<form method="POST" action="{{ url('/user_login') }}">
    {{ csrf_field() }}
    ユーザＩＤ：<input type="text" name="user_id"><br />
    @if ($errors->has("user_id"))
        <span class="error">{{ $errors->first("user_id") }}</span><br />
    @endif
    パスワード：<input type="password" name="password"><br />
    @if ($errors->has("password"))
        <span class="error">{{ $errors->first("password") }}</span><br />
    @endif
    <input type="submit" value="登録">
</form>
<a href="{{ url('/') }}">戻る</a><br />
@endsection