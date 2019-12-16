<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLekoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lekovi', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreign('id')->references('lek_id')->on('lek_dijagnoze');
            $table->string('naziv');
            $table->integer('kolicina');
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
        Schema::dropIfExists('lekovi');
    }
}
