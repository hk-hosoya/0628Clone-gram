<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Laravelの拡張クラス Str を読み込み */
use Illuminate\Support\Str;

//モデル
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Follower;


class CloneGramController extends Controller
{
    //ホーム画面（一覧画面）表示
    public function index(Request $request)
    {
        /* Requestに送信された検索キーワードを変数に保持 */
        $keyword = $request->input('keyword');
        $search_account = $request->input('search_account');

        /* 検索キーワードが入力されている場合、表示するデータを絞り込む */
        if (Str::length($keyword) > 0) { // Str::length(<文字列>) で、文字列の長さを取得できる
            $articles = Article::where('title', 'LIKE', "%$keyword%") // ファイル名にkeyword を含むものを絞り込み
                ->orWhere('memo', 'LIKE', "%$keyword%") // 備考にkeyword を含むものを絞り込み
                ->get();
        } elseif (Str::length($search_account) > 0) {
            $articles = Article::join('users', 'user_id', '=', 'users.id')
                ->orWhere('name', 'LIKE', "%$search_account%")
                ->get();
        } else {
            /* 検索キーワードが入力されていない場合は、全件取得する */
            $articles = Article::all();
        }

        return view('Clone-gram.index', compact('keyword', 'articles', 'search_account'));
    }

    public function index_my(Request $request)
    {
        // $articless = Article::all();
        // dd($articless);
        $main_user = \Auth::user()->name;
        $articles = Article::join('users', 'articles.user_id', '=', 'users.id')
            ->where('name', 'LIKE', "%$main_user%")
            ->get();
        // dd($articles);

        return view('Clone-gram.my_page', compact('main_user', 'articles'));
    }


    //投稿ページ
    public function post_article()
    {
        return view('Clone-gram.post_article');
    }

    //投稿した記事の編集画面
    public function edit_article(Request $request)
    {

        // dd($request->all());
        $article = Article::findOrFail($request->henshuu);
        return view('Clone-gram.edit_article', compact('main_user', 'article'));
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
        $articles = Auth::user()->id;
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
    // public function friends_page()
    // {
    //     return view('Clone-gram.friends_page');
    // }

    public function index_friends(Request $request)
    {
        $user = $request->input('user_friends');
        $articles = Article::join('users', 'user_id', '=', 'users.id')
            ->Where('name', 'LIKE', "%$user%")
            ->get();

        return view('Clone-gram.friends_page', compact('user', 'articles'));
    }

    //フォロワー表示画面
    // public function follower()
    // {
    //     return view('Clone-gram.follower');
    // }

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

        /* UploadImage オブジェクトを生成 */
        $upload_image = new Article();
        $upload_image->filename = $request->image->getClientOriginalName();
        $upload_image->memo = $request->memo;
        $upload_image->title = $request->title;
        $upload_image->user_id = $request->user_id;
        $upload_image->filepath = $file_path;

        /* データベースにレコードを追加する */
        $upload_image->save();


        /* 保存した画像を表示する */
        print("<img src='" . asset("$file_path") . "' width='300'>");

        print("<a href='post_article'>画像投稿フォームに戻る</a>");
    }
    //follow.blade.phpにすべてのユーザー情報を取得
    public function follower(User $user)
    {
        $all_users = $user->all();

        return view('Clone-gram.follower', compact('all_users'));
    }

    // フォローする処理
    public function setFollow(Request $request, $id)
    {
        //フォローしている側のユーザー
        // $user = new User;
        $follower = \Auth::user();

        // フォローしているかチェック
        // $is_following = $follower->isFollowing($request->user->id);
        $is_following = $follower->isFollowing($id);

        if (!$is_following) {
            // フォローしていなければフォローする
            // $follower->follow($request->user->id);
            $follower->follow($id);
            // $mes = "フォローしました。";
            return redirect('/Clone-gram/follower');
        } else {
            // $mes = "フォロー済みです";
            return redirect('/Clone-gram/follower');
        }
    }
    /////////////////////////////////////////
    // フォロー解除
    public function setUnfollow(Request $request, $id)
    {
        //フォローしている側のユーザー
        // $user = new User;
        $follower = \Auth::user();

        // フォローしているかチェック
        // $is_following = $follower->isFollowing($request->user->id);
        $is_following = $follower->isFollowing($id);

        if ($is_following) {
            // フォローしていなければフォローする
            // $follower->follow($request->user->id);
            $follower->unfollow($id);
            // $mes = "フォローしました。";
            return redirect('/Clone-gram/follower');
        } else {
            // $mes = "フォロー済みです";
            return redirect('/Clone-gram/follower');
        }
    }
    /**
     * 削除処理
     */
    public function delete(Request $request)
    {
        $articleId = $request->input('article_id');
        $article = Article::where('filepath', $articleId)->first();

        $article->delete();

        return redirect()->back()->with('success', '削除されました');
    }
}
