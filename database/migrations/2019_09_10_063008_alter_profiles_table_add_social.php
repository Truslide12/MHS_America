<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProfilesTableAddSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('profiles', function(Blueprint $table) {
            /*
                Dont see querying the social stuff is needed... 
                so 6 columns for 1 plus i dont have to write 
                migraion when myspace becomes relevant again.
            */
            $table->json('social_media')->nullable(true);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function(Blueprint $table) {
            $table->dropColumn('social_media');                   
        });
    }
}
