<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function(Blueprint $table){
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->integer('album_id')->unsigned();
          $table->string('title');
          $table->text('content');
          $table->string('statusNew',15);
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
        Schema::dropIfExists('publications');
    }
}
