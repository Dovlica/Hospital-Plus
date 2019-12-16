<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartoni', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->foreign('id')->references('karton_id')->on('lek_dijagnoze');
            $table->string('ime');
            $table->string('prezime');
            $table->integer('godine');
            $table->string('dijagnoza');
            $table->string('opis_dijagnoze');
            $table->integer('lek_dijagnoze_id');
            $table->integer('lekar');
            $table->timestamp('datum');
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
        Schema::dropIfExists('kartoni');
    }
}
