<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaaset')->nullable();
            $table->string('noaset')->nullable();
            $table->string('spc')->nullable();
            $table->string('lem')->nullable();
            $table->string('ket')->nullable();
            $table->string('code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nfis');
    }
}
