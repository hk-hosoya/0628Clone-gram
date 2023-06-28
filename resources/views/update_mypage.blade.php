<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>マイページ</title>
</head>
<body>
    <h1>マイページ</h1>
    <h2>{{ Auth::user()->name }}</h2>
    <div>
        {{-- {{ dump($errors->first('image')); }} --}}
    </div>

    <input type="button" onclick="location.href='/update_mypage'" value="マイページ">
    <input type="button" onclick="location.href='/upload_images'" value="タイムライン">
    <input type="button" onclick="location.href='/upload_form'" value="画像をアップロード">
    <form action="{{route('logout')}}" method="post">
        <button type="submit">ログアウト</button>
        @csrf
    </form>



    <table border='1'>
        <tr>
            <th>ユーザ名</th>
            <th>ファイル名</th>
            <th>画像</th>
            <th>URL</th>
            <th>備考</th>
            <th></th>
        </tr>
        @foreach ($upload_images as $upload_image)
            <tr>
                <td>{{$upload_image->user->name}}</td>
                <td>{{$upload_image->filename}}</td>
                <td><a href="{{$upload_image->filepath}}" target="_blank"><img src='{{$upload_image->filepath}}' width='200'></a></td>
                <td>http://localhost/{{$upload_image->filepath}}</td>
                <td>{{$upload_image->memo}}</td>
                <td>
                    <input type="button" value="編集">
                    <input type="button" value="削除">
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>