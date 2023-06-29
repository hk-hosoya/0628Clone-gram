<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CloneGramController extends Controller
{
    //ホーム画面（一覧画面）表示
    public function index()
    {
        return view('Clone-gram.index');
    }

    //投稿ページ
    public function post_article()
    {
        return view('Clone-gram.post_article');
    }

    //投稿した記事の編集画面
    public function edit_article()
    {
        return view('Clone-gram.edit_article');
    }

    //アカウント追加画面表示
    public function add_user()
    {
        return view('Clone-gram.add_user');
    }

    //アカウント登録確認画面
    public function confirm_user()
    {
        return view('Clone-gram.confirm_user');
    }

    //アカウント登録完了画面
    public function complete_user()
    {
        return view('Clone-gram.complete_user');
    }

    //マイページ
    public function my_page()
    {
        return view('Clone-gram.my_page');
    }

    //プロフィール編集画面
    public function edit_profile()
    {
        return view('Clone-gram.edit_profile');
    }

    //プロフィール編集確認画面
    public function confirm_profile()
    {
        return view('Clone-gram.confirm_profile');
    }


    //他ユーザーのページ
    public function friends_page()
    {
        return view('Clone-gram.friends_page');
    }

    //フォロワー表示画面
    public function follower()
    {
        return view('Clone-gram.follower');
    }

    //フォロ中のユーザーの表示画面
    public function following()
    {
        return view('Clone-gram.following');
    }

    //チャット画面表示
    public function chat()
    {
        return view('Clone-gram.chat');
    }

    //画像投稿
    public function add_article()
    {
        return view('Clone-gram.add_article');
    }

    /* POST 送信された画像ファイルを受け取って、storageに保存する */
    public function upload(Request $request)
    {
        /* バリデーション */
        $request->validate([
            'image' => 'required|max:1024|mimes:jpg,jpeg,png,gif'
        ]);

        /* store('保存先ディレクトリ', 'ディスク') メソッドで、ファイルをstorage/public/images ディレクトリに保存する
         * ファイル名はランダム文字列になり、store()の返り値として取得できる
         * 第2引数は、config/filesystems.php で設定したdisks 配列のキーから指定する
         */
        $file_path = $request->image->store('images', 'public');

        /* 保存した画像を表示する */
        print("<img src='" . asset("$file_path") . "' width='300'>");

        print("<a href='add_article'>画像投稿フォームに戻る</a>");
    }
}
