<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingVouchersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('listing_vouchers', function($table) {
            $table->bigIncrements('id');
            $table->string('code', 12)->unique();
            $table->bigInteger('company_id')->nullable(true);
            $table->integer('product_term')->nullable(false)->default(180); /*not all vouchers need to be for full product length..*/
            $table->integer('status');
            $table->dateTime('expires_at')->nullable(true);
            $table->bigInteger('publisher_id');
            $table->longText('notes')->nullable(true);
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
        Schema::dropIfExists('listing_vouchers');
    }

}
