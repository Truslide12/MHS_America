<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterListingVouchersTableAddOpen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('listing_vouchers', function(Blueprint $table) {
            $table->boolean('is_open')->default(false);
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
            $table->dropColumn('is_open');
        });
    }
}
