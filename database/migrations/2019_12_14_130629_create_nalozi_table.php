<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaloziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nalozi', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreign('id')->references('id_lekara')->on('pacijenti');
            $table->string('username');
            $table->string('password');
            $table->string('ime');
            $table->string('prezime');
            $table->integer('jmbg');
            $table->string('privilegija');
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
        Schema::dropIfExists('nalozi');
    }
}
