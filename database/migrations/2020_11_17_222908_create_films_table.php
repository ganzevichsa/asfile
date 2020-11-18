<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('category_to')->nulable();
            $table->string('category_tre')->nulable();
            $table->string('name');
            $table->string('name2');
            $table->string('name3')->nulable();
            $table->string('country')->nulable();
            $table->string('years')->nulable();
            $table->text('description')->nulable();
            $table->string('image')->nulable();
            $table->string('status')->nulable();
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
        Schema::dropIfExists('films');
    }
}
