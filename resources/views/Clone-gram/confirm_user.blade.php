<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone-gram（アカウント作成、確認画面）</title>
</head>
<body>
<head>
    <!-- ロゴ -->
    <h1><a href="/Clone-gram/index">Clonegram</a></h1>

    <!-- ナビゲーション -->
    <nav>



 <button type="submit">ログイン</button>


    </nav>


 </head>
    ※アカウント作成（確認画面）だよ


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アカウント登録</title>
</head>
<body>

    <h1>アカウント登録</h1>
    <form method="POST" action="">
        @csrf
        アカウント名<input type="text" name="name" placeholder="ユーザー名"><br>
        メールアドレス<input type="mail" name="mail" id="">
        パスワード<input type="text" name="password" placeholder="パスワード"><br>
        <label for="image">
                <p>プロフィール画像</p>
                <input id="image" type="file" name="image">
        </label><br>
        自己紹介<input type="text" name="self" id=""><br>
        <input type="submit" value="登録">
    </form>

</body>
</html>


<?php --}}
#===========================================================
#  入力情報の受け取りと加工
#===========================================================

// $name = $_POST["name"];
// $email = $_POST["mail"];
// $pass = $_POST["password"];
// $imag = $_POST["image"];
// $comment = $_POST["self"];

// # 入力チェック
// if ($name == "") {
//     error("名前が未入力です");
// }
//     if (!preg_match("/\w+@\w+/", $email)) {
//         error("メールアドレスが不正です");
//     }

//     if($password == ""){
//         error("パスワードが未入力です");
//     }

//      if ($imag == "") {
//         error("画像が未選択です");
//     }

//     if ($comment == "") {
//         error("自己紹介が未入力です");
//     };


//     # 無効化
//     $name  = htmlentities($name, ENT_QUOTES, "UTF-8");
//     $email = htmlentities($email, ENT_QUOTES, "UTF-8");
//     $comment = htmlentities($comment, ENT_QUOTES, "UTF-8");

//     # 改行処理
//     $name = str_replace("\r\n", "", $name);
//     $email = str_replace("\r\n", "", $email);
//     $comment = str_replace("\r\n", "\t", $comment);
//     $comment = str_replace("\r", "\t", $comment);
//     $comment = str_replace("\n", "\t", $comment);

