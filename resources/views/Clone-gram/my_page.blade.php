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
            <th>編集</th>
            <th>削除</th>

        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->user->name}}</td>
                <td>{{$article->title}}</td>
                <td><a href="{{$article->filepath}}" target="_blank"><img src='http://localhost/{{$article->filepath}}' width='200'></a></td>
                <td>{{$article->memo}}</td>
                <td>
                    <input type="button" value="編集" name="henshuu">
                </td>
                <td><input type="button" value="削除" name="sakuzyo"></td>
            </tr>
        @endforeach
    </table>


<!-- データ取得前のイメージ 構図-->


</main>
@endsection
