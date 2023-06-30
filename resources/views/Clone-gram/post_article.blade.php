<h2 align='center'>post</h2>
@extends('layouts.base')
    @section('title')
    post
    @endsection

    @section('content')
<!-- コンテンツ -->
<main>
    <form action="" method="POST" enctype="multipart/form-data" align="center">
        <p align='center'>新規投稿を作成</p>

        <div>
            <label for="title">
                <p>タイトル</p>
                <input id="title" type="text" name="title">
            </label>
        </div>
        <div>
            <label for="image">
                <p>写真を選択してください</p>
                <input id="image" type="file" name="image">
            </label>
        </div>

        <div>
            <label for="memo">
                <p>
                <textarea name="memo" id="memo" placeholder="キャプションを入力..." cols="50" rows="10"></textarea>
                </p>
            </label>
        </div>

        {{-- <div>
            <p>
            <label for="hashtag">
                <input type="text" name="search_tag" placeholder="#ハッシュタグで探す 例）#おうちごはん" size="50"><br>
            </label>
            </p>
        </div> --}}

        <div>
            <p>
                <input type='button' onclick="location.href='/Clone-gram/index'" value='キャンセル' size="30">

                <input type="submit" value="シェアする" size="30">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </p>
        </div>

        @csrf
    </form>


</main>
@endsection
