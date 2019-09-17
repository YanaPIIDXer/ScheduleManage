@extends("layouts/view")

@section("Content")
<h1 class="text-center">スケジュール管理システム ログイン</h1>
<form method="POST" action="{{ url('/user_login') }}">
    {{ csrf_field() }}
    <div class="container">
        <div class="form-group row">
            <label for="user_id" class="col-md-2 offset-3 col-form-label">
                ユーザＩＤ
            </label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="user_id"><br />
            </div>
            @if ($errors->has("user_id"))
                <span class="col-md-12 error">{{ $errors->first("user_id") }}</span><br />
            @endif
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-2 offset-3 col-form-label">
                パスワード
            </label>
            <div class="col-md-4">
                <input type="password" class="form-control" name="password"><br />
            </div>
            @if ($errors->has("password"))
                <span class="error">{{ $errors->first("password") }}</span><br />
            @endif
        </div>
        <div class="form-group row justify-content-end">
            <div class="col-md-7">
                <input type="submit" class="btn btn-primary" value="ログイン">
            </div>
        </div>
    </div>
</form>
<a href="{{ url('/') }}">戻る</a><br />
@endsection