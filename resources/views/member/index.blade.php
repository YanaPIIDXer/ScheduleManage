@extends("layouts/view")

@section("Content")
<h1>スケジュール管理システム　会員ページ</h1>
<a href="{{ url('/member/schedule_list') }}">登録スケジュール一覧</a><br />
<a href="{{ url('/member/add_schedule') }}">スケジュール登録</a><br />
<a href="{{ url('/logout') }}">ログアウト</a><br />
@endsection