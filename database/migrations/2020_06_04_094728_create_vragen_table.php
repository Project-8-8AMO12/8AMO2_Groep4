<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vragen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('antwoordid');
            $table->string('title', 255);
            $table->string('contentA', 2000);
            $table->string('contentQ', 2000);
            $table->string('image', 255);
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
        Schema::dropIfExists('vragen');
    }
}
