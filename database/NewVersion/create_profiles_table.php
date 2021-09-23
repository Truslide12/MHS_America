<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('amenities')->nullable(true);
            $table->json('utilities')->nullable(true);
            $table->string('office_manager', 128)->nullable(true);
            $table->string('office_email', 128)->nullable(true);
            $table->boolean('office_tagline')->nullable(true);
            $table->boolean('carport')->nullable(false)->default(false);
            $table->boolean('garage')->nullable(false)->default(false);
            $table->boolean('visitor')->nullable(false)->default(false);
            $table->json('social_media')->nullable(true);
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
        Schema::dropIfExists('profiles');
    }
}
