<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone-gram（マイページ編集画面）</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css'); }}">
    <link rel="stylesheet" href="{{ asset('css/all.css'); }}">
</head>
<body>
<head>
    <!-- ロゴ -->
    <h1><a href="/Clone-gram/index">Clonegram</a></h1>
    <!-- ナビゲーション -->
    <nav>

    <!-- 後々、マイページとログアウトそれぞれのフォームをつくる -->


    <form action="/Clone-gram/index" method="get">
    <button type="submit">ホーム</button>
</form>
<br>
    <form action="/Clone-gram/my_page" method="get">
    <button type="submit">マイページ</button>
    @csrf
</form>


<br>
      <button type="submit">ログアウト</button>


    </nav>


 </head>
    ※マイページ（編集画面）だよ
</body>
</html>
