<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('filename')->comment('ユーザーがアップロードしたファイルの名前');
	    /* こちらをreal_filenameからfilepathに変更をお願いいたします */
            $table->string('filepath')->comment('ストレージに保存されている実際のファイルの名前');
            $table->text('memo')->comment('ファイルの備考')->nullable();
            $table->string('title')->comment('投稿のタイトル');
            $table->bigInteger('user_id');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};