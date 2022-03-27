<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid("user_id");
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('content', 777);

            $table->uuid('repost_post_id')->nullable();

            $table->foreignUuid('quote_user_id')->nullable();
            $table->foreign('quote_user_id')->references('id')->on('users');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('repost_post_id')->references('id')->on('posts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
