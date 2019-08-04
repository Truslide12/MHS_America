<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProfilesTableAddOfficeInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('profiles', function(Blueprint $table) {
            $table->string('office_manager', 128)->nullable(true);
            $table->string('office_email', 128)->nullable(true);
            $table->boolean('office_tagline')->nullable(true);
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
            $table->dropColumn('office_manager');
            $table->dropColumn('office_email');
            $table->dropColumn('office_tagline');            
        });
    }
}
