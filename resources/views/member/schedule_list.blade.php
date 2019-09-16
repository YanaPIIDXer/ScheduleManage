@extends("layouts/view")

@section("Content")
<h1>スケジュール管理システム　登録スケジュール一覧</h1>
<table border=1>
    <tr>
        <th>タイトル</th>
        <th>日付</th>
        <th>開始時間</th>
        <th>終了時間</th>
        <th>消去</th>
    </tr>
@foreach($schedules as $schedule)
    <tr>
        <td>{{ $schedule->title }}</td>
        <td>{{ $schedule->date }}</td>
        <td>{{ $schedule->start_time }}</td>
        <td>{{ $schedule->end_time }}</td>
        <td>
            <form method="POST" action="{{ url('member/delete_schedule') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $schedule->id }}">
                <input type="submit" value="消去">
            </form>
        </td>
    </tr>
@endforeach
</table><br />
<a href="{{ url('member/delete_ended_schedule') }}"><input type="button" value="終了したスケジュールを全て削除"></a><br /><br />
<a href="{{ url('member/index') }}">戻る</a><br />
@endsection