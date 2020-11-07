<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_dos', function (Blueprint $table) {
            $table->id('id');
            $table->char('title',100);
            $table->longText('description');
            $table->boolean('completed');
            $table->timestamps();

            $table->unsignedBigInteger('board_id');
            $table->foreign('board_id')->references('id')->on('boards')
                ->cascadeOnUpdate('cascade')
                ->cascadeOnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_dos');
    }
}
