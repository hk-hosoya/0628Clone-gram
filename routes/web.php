<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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


//チャット画面表示
Route::get('/Clone-gram/chat', [CloneGramController::class, 'chat']);


/* Storage ファサードを使ってファイルの操作をしてみる */
Route::get('storage_test', function () {
    /* タイムスタンプを含めたテキストファイル名を作成 */
    $filename = time() . '.txt';
    /* テキストファイルの内容を作成 */
    $content = "ファイル名: {$filename}";
    /* Storage::put(<ファイルパス>, <内容>) で、ファイルを作成
    * ファイル名だけ記載した場合は、操作対象のdisk の直下に作成される
    */
    Storage::put($filename, $content);
    /* Storage::files(ファイルパス) で、ファイルの一覧を取得 */
    $files = Storage::files();
    dump($files);
});


/* auth ミドルウェアが認証状態を判定してくれる */
Route::group(['middleware' => ['auth']], function () {
    /* 画像アップロードフォームを表示するルーティング */
    Route::get('upload_form', function () {
        return view('upload_form');
    })->name('upload_form');

    Route::get('upload_images', function () {
        return view('upload_images');
    })->name('upload_images');

    Route::get('update_mypage', function () {
        return view('update_mypage');
    })->name('update_mypage');

    /* ログイン中のみアクセスできるルーティングのサンプル */
    Route::get('/users_only', function () {
        return view('users_only');
    });
});
