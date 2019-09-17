<!DOCTYPE html>
<html>
<head>
<title>スケジュール管理</title>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('/bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
@if (session("flash_message"))
    <span class="flash_message">{{ session("flash_message") }}</span>
@endif
@yield("Content")
</body>
</html>