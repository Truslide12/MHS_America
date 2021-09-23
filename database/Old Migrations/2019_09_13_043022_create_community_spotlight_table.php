<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitySpotlightTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_spotlight', function($table) {
            $table->bigIncrements('id');
            $table->bigInteger('community_id');
            $table->dateTime('starts_at')->nullable(true);
            $table->dateTime('expires_at')->nullable(true);
            $table->bigInteger('impressions');
            $table->bigInteger('clicks');
            $table->string('spotlight_title')->nullable(true);
            $table->string('community_title')->nullable(true);
            $table->longText('community_description')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('community_spotlight');
    }

}
