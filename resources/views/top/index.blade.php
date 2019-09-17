@extends("layouts/view")

@section("Content")
<div class="container">
    <div class="row">
        <h1 class="col-sm-12 text-center mb-5">スケジュール管理システム</h1>
        <a class="col-sm-6 offset-sm-3 mb-3 btn btn-success" href="{{ url('/login') }}">ログイン</a><br />
        <a class="col-sm-6 offset-sm-3 btn btn-primary" href="{{ url('/register') }}">ユーザ登録</a><br />
    </div>
</div>
@endsection