<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinkelcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winkelcontents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('intro');
            $table->string('title1', 255);
            $table->text('section1');
            $table->string('title2', 255);
            $table->text('section2');
            $table->string('title3', 255);
            $table->text('section3');
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
        Schema::dropIfExists('winkelcontents');
    }
}
