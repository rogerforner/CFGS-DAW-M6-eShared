<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::enableForeignKeyConstraints();
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('descripcio');
            $table->integer('puntuacio')->nullable();
            $table->integer('idusuari')->unsigned();
            $table->integer('idcategoria')->unsigned();
            $table->text('note');
            $table->timestamps();
        });
        Schema::table('notes', function($table) {
          $table->foreign('idusuari')->references('id')->on('users');

        });
        Schema::table('notes', function($table) {
          $table->foreign('idcategoria')->references('id')->on('categories');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
