@extends("layouts/view")

@section("Content")
<link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/jquery.timepicker.min.css') }}">
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/jquery.timepicker.min.js') }}"></script>
<h1>スケジュール管理システム　スケジュール登録</h1>
<script type="text/javascript">
    $(function()
    {
        $("#date").datepicker({dateFormat: 'yy/mm/dd'});
        $("#starttime").timepicker();
        $("#endtime").timepicker();
    });
</script>
<form method="POST" action="{{ url('/member/add_schedule') }}">
    {{ csrf_field() }}
    タイトル：<input type="text" name="title"><br />
    @if ($errors->has("title"))
        <span class="error">{{ $errors->first("title") }}</span><br />
    @endif
    日付：<input type="text" id="date" name="date"><br />
    @if ($errors->has("date"))
        <span class="error">{{ $errors->first("date") }}</span><br />
    @endif
    開始時間：<input type="text" id="starttime" data-time-format="H:i" name="start_time"><br />
    @if ($errors->has("start_time"))
        <span class="error">{{ $errors->first("start_time") }}</span><br />
    @endif
    終了時間：<input type="text" id="endtime" data-time-format="H:i" name="end_time"><br />
    @if ($errors->has("end_time"))
        <span class="error">{{ $errors->first("end_time") }}</span><br />
    @endif
    <input type="submit" value="登録">
</form>
<a href="{{ url('/member/index') }}">戻る</a><br />
@endsection