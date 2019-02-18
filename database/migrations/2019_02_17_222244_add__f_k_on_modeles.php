<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKOnModeles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::table('modeles', function (Blueprint $table) {
            $table->foreign('constructeur')->references('nom')->on('constructeurs');
            $table->foreign('motorisation')->references('nom')->on('motorisations');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modeles', function (Blueprint $table) {
            $table->dropForeign('modeles_constructeur_foreign');
            $table->dropForeign('modeles_motorisation_foreign');
        });

    }
}
