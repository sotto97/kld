<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->comment('カテゴリID');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('user_id')->comment('ユーザーID');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('subject')->nullable()->comment('件名');
            $table->integer('status')->comment('ステータス');
            $table->date('limit_dt')->nullable()->comment('返答期限');
            $table->text('order_detail')->nullable()->comment('依頼内容');
            $table->text('report')->nullable()->comment('調査概要');
            $table->text('answer')->nullable()->comment('回答');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
