<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('abstract');
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
            $table->timestamps();
        });

        // Augmentation de la taille des champs
        /*Schema::table('adventures', function (Blueprint $table) {
            $table->string('abstract', 5000)->change();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adventures', function(Blueprint $table) {
			$table->dropForeign('adventures_user_id_foreign');
		});
        Schema::dropIfExists('adventures');
    }
}
