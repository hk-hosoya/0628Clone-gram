<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
        <!-- ロゴ -->
    <h1 align='center'><a href="/Clone-gram/index">Clonegram</a></h1>
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
    text-decoration: none;
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
            <h4>{{ Auth::user()->name }}</h4>
            <!-- <input type='button' onclick="location.href='/Clone-gram/post_article'" value='＋' class="nav">
            <input type='button' onclick="location.href='/Clone-gram/index'" value='ホーム' class="nav">
            <input type='button' onclick="location.href='/Clone-gram/my_page'" value='マイページ' class="nav">
            <input type='button' onclick="location.href='/Clone-gram/chat'" value='💭' class="nav"> -->

            <div class="nav">
            <a href='/Clone-gram/post_article'>+</a>
            <a href='/Clone-gram/index' >ホーム</a>
            <a href='/Clone-gram/my_page' >マイページ</a>
            <a href='/Clone-gram/chat' >💭</a>
            <a href="/Clone-gram/follower">👥</a>
</div>
        </div>
        <br>
    <main align='center'>
        @yield('content')
    </main>
</body>
</html>
