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

    <table border='1'>
        <tr>
            <th>ユーザ名</th>
            <th>ファイル名</th>
            <th>画像</th>
            <th>URL</th>
            <th>備考</th>
            <th></th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->user->name}}</td>
                <td>{{$article->filename}}</td>
                <td><a href="{{$article->filepath}}" target="_blank"><img src='{{$article->filepath}}' width='200'></a></td>
                <td>http://localhost/{{$article->filepath}}</td>
                <td>{{$article->memo}}</td>
                <td>
                    <input type="button" value="編集">
                    <input type="button" value="削除">
                </td>
            </tr>
        @endforeach
    </table>


<!-- データ取得前のイメージ 構図-->


</main>
@endsection
