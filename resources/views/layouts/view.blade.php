<!DOCTYPE html>
<html>
<head>
<title>スケジュール管理</title>
<meta charset="utf-8">
</head>
<body>
@if (session("flash_message"))
    <span class="flash_message">{{ session("flash_message") }}</span>
@endif
@yield("Content")
</body>
</html>