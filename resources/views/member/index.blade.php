@extends("layouts/view")

@section("Content")
<div class="container">
    <div class="row">
        <h1 class="col-sm-12 text-center mb-5">スケジュール管理システム　会員ページ</h1>
        <a class="col-sm-6 offset-sm-3 mb-3 btn btn-success" href="{{ url('/member/schedule_list') }}">登録スケジュール一覧</a><br />
        <a class="col-sm-6 offset-sm-3 mb-3 btn btn-primary" href="{{ url('/member/add_schedule') }}">スケジュール登録</a><br />
        <a class="col-sm-6 offset-sm-3 mb-3 btn btn-danger" href="{{ url('/logout') }}">ログアウト</a><br />
    </div>
</div>
@endsection