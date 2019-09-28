<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codesur');
            $table->timestamps();
        });
        Schema::create('b', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaaset')->nullable();
            $table->string('noaset')->nullable();
            $table->string('spc')->nullable();
            $table->string('lem')->nullable();
            $table->string('ket')->nullable();
            $table->string('code')->nullable();
            $table->integer('n_id')->unsigned()->index()->nullable();
            $table->foreign('n_id')->references('id')->on('a');
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
        Schema::dropIfExists('a','b');
    }
}
