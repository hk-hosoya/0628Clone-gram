<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone-gram（トップページ）</title>
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
<form action="/Clone-gram/my_page" method="get">  
    <button type="submit">マイページ</button>
</form>
<br>




                <button type="submit">ログアウト</button>


    </nav>


 </head>
 
<!-- コンテンツ -->
 <main>

<!-- ハッシュタグで検索 -->
<hr>
<input type="text" name="search_tag" placeholder="#ハッシュタグで探す 例）#おうちごはん" size="50"><br>
<!-- アカウントで検索 -->
<br>
<input type="text" name="search_acount" placeholder="アカウントを探す 例）test_user " size="50"><br>


<!-- 一覧画面 -->
<!-- データ取得前のイメージ 構図-->
<br>
<b>test_user</b>2023/6/25


<button type="submit" name="edit_article">編集</button>
<button type="submit" name="delete_article">削除</button>


</main>
   
</body>
</html>
