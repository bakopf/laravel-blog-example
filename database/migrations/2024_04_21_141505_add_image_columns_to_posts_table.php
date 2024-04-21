<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageColumnsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('filename')->nullable();
            $table->string('filepath')->nullable();
            $table->date('upload_date')->nullable();
            $table->integer('image_width')->nullable();
            $table->integer('image_height')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['filename', 'filepath', 'upload_date', 'image_width', 'image_height']);
        });
    }
}
