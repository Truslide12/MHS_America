<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProfilesTableAddAmenitiesUtilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function(Blueprint $table) {
            if (Schema::hasColumn('profiles', 'amenities')) {
                $table->dropColumn('amenities');
            }

            if (Schema::hasColumn('profiles', 'utilities')) {
                $table->dropColumn('utilities');
            }
        });

        Schema::table('profiles', function(Blueprint $table) {
            $table->json('amenities')->nullable(true);
            $table->json('utilities')->nullable(true);
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
            $table->dropColumn('amenities');
            $table->dropColumn('utilities');
        });
    }
}
