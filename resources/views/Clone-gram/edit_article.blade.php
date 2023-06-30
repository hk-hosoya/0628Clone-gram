<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone-gram（投稿編集画面）</title>
</head>
<body>
<head>
    <!-- ロゴ -->
    <h1><a href="/Clone-gram/index">Clonegram</a></h1>
    <!-- ナビゲーション -->
    <nav>

    <!-- 後々ログアウトのフォームをつくる -->

<!-- コンテンツ -->
<main>

    <form action="" method="POST" enctype="multipart/form-data" align="center">
        <p align='center'>新規投稿を作成</p>

        <div>
            <label for="title">
                <p>・タイトル{{$article->title}}</p>
                <input id="title" type="text" name="title" placeholder="新しいタイトルを入力してください" size="50">
            </label>
        </div>
        <div>
            <label for="image">
                <p>・写真<br>
                <a href="{{$article->filepath}}" target="_blank"><img src='http://localhost/{{$article->filepath}}' width='200'></a></p>
                <p>・新しい写真を選択してください</p>
                <input id="image" type="file" name="image">
            </label>
        </div>

        <div>
            <label for="memo">
                <p>・メモ{{$article->memo}}
                <textarea name="memo" id="memo" placeholder="新しいメモを入力してください" cols="50" rows="10"></textarea>
                </p>
            </label>
        </div>


        <div>
            <p>
                <input type='button' onclick="location.href='/Clone-gram/index'" value='キャンセル' size="30">

                <input type="submit" value="シェアする" size="30">
            </p>
        </div>

        @csrf
    </form>


</main>
@endsection



