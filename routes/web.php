<?php

use Illuminate\Support\Facades\Route;

//コントローラー
use App\Http\Controllers\CloneGramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ホーム画面（一覧画面）表示
Route::get('/Clone-gram/index', [CloneGramController::class, 'index'] );

 //投稿ページ
Route::get('/Clone-gram/post_article', [CloneGramController::class, 'post_article'] );

//投稿した記事の編集画面
Route::get('/Clone-gram/edit_article', [CloneGramController::class, 'edit_article'] );

//アカウント追加画面表示
Route::get('/Clone-gram/add_user', [CloneGramController::class, 'add_user'] );

 //アカウント登録確認画面
Route::get('/Clone-gram/confirm_user', [CloneGramController::class, 'confirm_user'] );

//アカウント登録完了画面
Route::get('/Clone-gram/complete_user', [CloneGramController::class, 'complete_user'] );

//マイページ
Route::get('/Clone-gram/my_page', [CloneGramController::class, 'my_page'] );

//プロフィール編集画面
Route::get('/Clone-gram/edit_profile', [CloneGramController::class, 'edit_profile'] );

//プロフィール編集確認画面
Route::get('/Clone-gram/confirm_profile', [CloneGramController::class, 'confirm_profile'] );

//他ユーザーのページ
Route::get('/Clone-gram/friends_page', [CloneGramController::class, 'friends_page'] );

//フォロワー表示画面
Route::get('/Clone-gram/follower', [CloneGramController::class, 'follower'] );

//フォロ中のユーザーの表示画面
Route::get('/Clone-gram/following', [CloneGramController::class, 'following'] );

//チャット画面表示
Route::get('/Clone-gram/chat', [CloneGramController::class, 'chat'] );

