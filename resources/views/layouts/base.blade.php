<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
        <!-- ロゴ -->
    <h1><a href="/Clone-gram/index">Clonegram</a></h1>
</head>
<body>
    <header align='center'>
        <hr>
        <div>
            <h4>{{ Auth::user()->name }}</h4>
            <input type='button' onclick="location.href='/Clone-gram/post_article'" value='＋'>
            <input type='button' onclick="location.href='/Clone-gram/index'" value='ホーム'>
            <input type='button' onclick="location.href='/Clone-gram/my_page'" value='マイページ'>
            <input type='button' onclick="location.href='/Clone-gram/chat'" value='💭'>
        </div>
        <br>
    <main align='center'>
        @yield('content')
    </main>
</body>
</html>