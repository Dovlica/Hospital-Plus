<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLekDijagnozeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lek_dijagnoze', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('karton_id');
            $table->integer('lek_id');
            // $table->foreign('lek_id')->references('id')->on('lekovi');
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
        Schema::dropIfExists('lek_dijagnoze');
    }
}
