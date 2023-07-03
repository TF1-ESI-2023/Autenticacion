<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpanadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empanadas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("precio");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references('id')->on('users');
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
        Schema::dropIfExists('empanadas');
    }
}
