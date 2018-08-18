<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function (Blueprint $table) {
            $table->integer('No');
            $table->string('Type');
            $table->string('Answer');
        });

        Schema::create('result', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('No');
            $table->integer('Answer')->nullable();
            $table->integer('Tex_ID')->nullable();
            $table->timestamps();
        });

        Schema::create('tex_id', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('Answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master');
        Schema::dropIfExists('result');
        Schema::dropIfExists('tex_id');
    }
}
