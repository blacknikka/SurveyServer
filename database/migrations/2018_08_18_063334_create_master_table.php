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
        });

        Schema::create('results', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('no');
            $table->integer('answer')->nullable();
            $table->integer('tex_id')->nullable();
            $table->timestamps();
        });

        Schema::create('tex_ids', function (Blueprint $table) {
            $table->integer('id');
            $table->string('answer');
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
    }
}
