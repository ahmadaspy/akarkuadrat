<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputjawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputjawabans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->double('a');
            $table->double('b');
            $table->double('c');
            $table->double('x1')->nullable();
            $table->double('x2')->nullable();
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
        Schema::dropIfExists('inputjawabans');
    }
}
