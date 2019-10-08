<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->integer('eventFrom_id')->unsigned();
            $table->foreign('eventFrom_id')
				  ->references('id')
				  ->on('events')
				  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('eventTo_id')->unsigned();
            $table->foreign('eventTo_id')
				  ->references('id')
				  ->on('events')
				  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
        Schema::dropIfExists('choices');
    }
}
