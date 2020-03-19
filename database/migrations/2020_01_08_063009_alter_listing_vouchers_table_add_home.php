<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterListingVouchersTableAddHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('listing_vouchers', function(Blueprint $table) {
            $table->integer('home_id')->nullable(true);
            $table->foreign('home_id')->references('id')->on('homes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing_vouchers', function(Blueprint $table) {
            $table->dropForeign('listing_vouchers_home_id_foreign');
        });

        Schema::table('listing_vouchers', function(Blueprint $table) {
            $table->dropColumn('home_id');
        });
    }
}
