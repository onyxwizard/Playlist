<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('cbody');
            $table->bigInteger('cuser_id');
            $table->bigInteger('cpost_id')->unsigned();
            $table->string('user_comment_name');
            
            $table->foreign('cpost_id')->references('post_id')->on('post_image')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('comments');
    }
};
