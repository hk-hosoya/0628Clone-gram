<h2 align='center'>home</h2>
@extends('layouts.base')
    @section('title')
    ホーム
    @endsection

    @section('content')

<!-- コンテンツ -->
<main>

<form action="" method="GET">
    <label>
        検索キーワード
            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="タイトル、メモ内容から探す" size="50">
    </label>
        <input type="submit" value="検索">
</form>

<table border='1' align="center">
    <tr>
        <th>ユーザ名</th>
        <th>タイトル</th>
        <th>画像</th>
        <th>メモ</th>
        <th>日付</th>



    </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->user->name}}</td>
                <td>{{$article->title}}</td>
                <td><a href="{{$article->filepath}}" target="_blank"><img src='http://localhost/{{$article->filepath}}' width='200'></a></td>
                <td>{{$article->memo}}</td>
                <td>{{$article->uploated_at}}</td>
            </tr>

    @endforeach
</table>

<!-- ハッシュタグで検索 -->
{{-- <hr>
<input type="text" name="search_tag" placeholder="#ハッシュタグで探す 例）#おうちごはん" size="50"><br> --}}
<!-- アカウントで検索 -->
<br>
<form action="" method="get">
<input type="text" name="search_account" value="{{$search_account}}" placeholder="アカウントを探す 例）test_user " size="50"><input type="submit" value="検索"><br>
</form>

<!-- 一覧画面 -->
<!-- データ取得前のイメージ 構図-->
<br>
<b>test_user</b>2023/6/25


<button type="submit" name="edit_article">編集</button>
<button type="submit" name="delete_article">削除</button>


</main>
@endsection
