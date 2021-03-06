<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('provider_ratings', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('provider_id');
          $table->integer('request_id');
          $table->integer('rating');
          $table->string('comment');
          $table->integer('status');
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
        Schema::drop('provider_ratings');
    }
}
