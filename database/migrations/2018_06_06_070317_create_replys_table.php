<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replys', function (Blueprint $table) {
          $table->increments('id');
            $table->string('content');
            $table->string('account',200);
            $table->foreign('account')->references('account')->on('users');
            $table->datetime('date');
            $table->integer('did');
            $table->foreign('did')->references('id')->on('dreams');
        //  $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replys');
    }
}
