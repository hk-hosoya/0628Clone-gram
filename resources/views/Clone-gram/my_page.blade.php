<h2 align='center'>my page</h2>
@extends('layouts.base')
    @section('title')
    マイページ
    @endsection

    @section('content')

    <form action="{{route('logout')}}" method="post">
        <button type="submit">ログアウト</button>
        @csrf
    </form>
<!-- コンテンツ -->
<main>

    <table border='1' align="center">
        <tr>
            <th>ユーザ名</th>
            <th>タイトル</th>
            <th>画像</th>
            <th>メモ</th>
            <th>編集・削除</th>

        </tr>
        @foreach ($articles as $article)
            <tr>
                <form action="friends_page" method="GET">
            <td><input type='submit' name="user_friends" value="{{$article->user->name}}">
            </td></form>
                <td>{{$article->title}}</td>
                <td><a href="{{$article->filepath}}" target="_blank"><img src='http://localhost/{{$article->filepath}}' width='200'></a></td>
                <td>{{$article->memo}}</td>
                <form action="edit_article" method="get"><td>
                    <input type="submit" value="編集" name="henshuu">
                    <input type="hidden" name="article_path" value="{{$article->filepath}}">
                </form>
                    <form action="my_page/delete" method="GET">
                        <input type="submit" value="削除">
                        <input type="hidden" name="article_id" value="{{$article->filepath}}">
                    </form>
                </td>


            </tr>
        @endforeach
    </table>


<!-- データ取得前のイメージ 構図-->


</main>
@endsection
