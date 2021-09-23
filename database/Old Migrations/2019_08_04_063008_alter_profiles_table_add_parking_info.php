<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProfilesTableAddParkingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('profiles', function(Blueprint $table) {
            $table->boolean('carport')->nullable(false)->default(false);
            $table->boolean('garage')->nullable(false)->default(false);
            $table->boolean('visitor')->nullable(false)->default(false);
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
            $table->dropColumn('carport');          
            $table->dropColumn('garage');          
            $table->dropColumn('visitor');          
        });
    }
}
