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
        Schema::create('masters', function (Blueprint $table) {
            $table->integer('id');
            $table->string('type');
            $table->string('answer');
            $table->integer('value')->nullable();
        });

        Schema::create('tex_ids', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('answer')->nullable();
        });

        Schema::create('results', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('no');
            $table->integer('answer')->nullable();
            $table->unsignedInteger('tex_id')->nullable();
            $table->timestamps();

            $table->foreign('tex_id')
                ->references('id')
                ->on('tex_ids');
        });

        Schema::create('psws', function (Blueprint $table) {
            $table->string('mail');
            $table->string('psw');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masters');
        Schema::dropIfExists('results');
        Schema::dropIfExists('tex_ids');
        Schema::dropIfExists('psws');
    }
}
