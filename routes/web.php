<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
//コントローラー
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



//チャット画面表示
Route::get('/Clone-gram/chat', [CloneGramController::class, 'chat']);



//ホーム画面（一覧画面）表示
Route::get('/Clone-gram/index', [CloneGramController::class, 'index']);


//投稿ページ
Route::get('/Clone-gram/post_article', [CloneGramController::class, 'post_article']);


//投稿した記事の編集画面
Route::get('/Clone-gram/edit_article', [CloneGramController::class, 'edit_article']);


//マイページ
Route::get('/Clone-gram/my_page', [CloneGramController::class, 'my_page']);


//プロフィール編集画面
Route::get('/Clone-gram/edit_profile', [CloneGramController::class, 'edit_profile']);


//プロフィール編集確認画面
Route::get('/Clone-gram/confirm_profile', [CloneGramController::class, 'confirm_profile']);


//他ユーザーのページ
Route::get('/Clone-gram/friends_page', [CloneGramController::class, 'friends_page']);


//フォロワー表示画面
Route::get('/Clone-gram/follower', [CloneGramController::class, 'follower']);


//フォロ中のユーザーの表示画面
Route::get('/Clone-gram/following', [CloneGramController::class, 'following']);

/* 画像アップロードフォームを表示するルーティング */
Route::get('/Clone-gram/add_article', [CloneGramController::class, 'add_article']);

/* POST 送信された画像を受け取って保存するルーティング */
Route::post('/Clone-gram/add_article', [CloneGramController::class, 'upload']);

// /* Storage ファサードを使ってファイルの操作をしてみる */
// Route::get('storage_test', function () {
//     /* タイムスタンプを含めたテキストファイル名を作成 */
//     $filename = time() . '.txt';
//     /* テキストファイルの内容を作成 */
//     $content = "ファイル名: {$filename}";

//     /* Storage::put(<ファイルパス>, <内容>) で、ファイルを作成
//      * ファイル名だけ記載した場合は、操作対象のdisk の直下に作成される
//      */
//     Storage::put($filename, $content);

//     /* Storage::files(ファイルパス) で、ファイルの一覧を取得 */
//     $files = Storage::files();
//     dump($files);
// });
