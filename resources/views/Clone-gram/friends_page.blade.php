<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user}}</title>
        <!-- ロゴ -->
        <h1 align='center'><a href="/Clone-gram/index">Clonegram</a></h1>
        <h4 align='center'>{{$user}}</h4>
        <style>
                .btn-gradient-follow {
        padding: 10 50;
        margin-left:100px;
        color: #fff;
  border: 2px solid #fff;
  border-radius: 0;
  background-image: -webkit-gradient(linear, left top, right top, from(#fa709a), to(#fee140));
  background-image: -webkit-linear-gradient(left, #fa709a 0%, #fee140 100%);
  background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
  box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        }

  .btn-gradient-follow:hover {
  -webkit-transform: translate(0, -2px);
  transform: translate(0, -2px);
  color: #fff;
  -webkit-box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
  box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
}

.btn-gradient-unfollow {
        padding: 10 50;
        margin-left:100px;
        color: #fff;
  border: 2px solid #fff;
  border-radius: 0;
  background-image: -webkit-gradient(linear, left top, right top, from(#fa709a), to(#fee140));
  background-image: -webkit-linear-gradient(left, #2af598 0%, #009efd 100%);
  background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
  box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        }

  .btn-gradient-unfollow:hover {
  -webkit-transform: translate(0, -2px);
  transform: translate(0, -2px);
  color: #fff;
  -webkit-box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
  box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
}

/* navのCSS */
.nav a{
    background: #eee;
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 240px;
    padding: 10px 25px;
    color: #313131;
    transition: 0.3s ease-in-out;
    font-weight: 500;
    z-index:0;
    border-left: solid 5px #6bb6ff;
}
.nav a:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 0;
    display: block;
    background: #6bb6ff;
    transition: .3s;
    left:0;
}
.nav a:hover {
    color: #FFF;
}
.nav a:hover:before {
    width: 100%;
    z-index: -1;
}
body{
    background-color:#e5e5f7;
}

        </style>
</head>
<body>
    <header align='center'>
        <hr>
        <div>
            <input type='button' onclick="location.href='/Clone-gram/post_article'" value='＋'>
            <input type='button' onclick="location.href='/Clone-gram/index'" value='ホーム'>
            <input type='button' onclick="location.href='/Clone-gram/my_page'" value='マイページ'>
            <input type='button' onclick="location.href='/Clone-gram/chat'" value='💭'>
        </div>
        <br>
    </header>



<!-- コンテンツ -->
<main>

<table border='1' align='center'>
    <tr>
        <th>ユーザ名</th>
        <th>ファイル名</th>
        <th>画像</th>
        <th>備考</th>

    </tr>
    @foreach ($articles as $article)
        <tr>
            <form action="friends_page" method="GET">
            <td><input type='submit' name="user_friends" value="{{$article->user->name}}">
            </td></form>
            <td>{{$article->filename}}</td>
            <td><a href="{{$article->filepath}}" target="_blank"><img src='http://localhost/{{$article->filepath}}' width='200'></a></td>
            <td>{{$article->memo}}</td>
        </tr>
    @endforeach
</table>

<!-- データ取得前のイメージ 構図-->


</body>
</html>
