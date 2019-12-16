<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacijentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacijenti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime');
            $table->string('prezime');
            $table->integer('jmbg');
            $table->integer('id_lekara');
            // $table->foreign('id_lekara')->references('id')->on('nalozi');
            $table->string('ime_lekara');
            $table->string('dijagnoza');
            $table->string('lek');
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
        Schema::dropIfExists('pacijenti');
    }
}
