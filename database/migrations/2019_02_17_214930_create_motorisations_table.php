<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorisations', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nom')->unique()->index();
            $table->decimal('cylindree',8,2);
            $table->integer('puissance');
            $table->string('energie');
            $table->integer('couple');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorisations');
    }
}
