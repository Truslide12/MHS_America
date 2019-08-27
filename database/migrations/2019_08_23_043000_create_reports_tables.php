<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function($table) {
            $table->bigIncrements('id');
            $table->bigInteger('rascal_id');
            $table->bigInteger('moderator_id')->default(0);
            $table->tinyInteger('reason_id');
            $table->bigInteger('link_id');
            $table->string('type', 32);
            $table->text('payload');
            $table->tinyInteger('resolved')->default(0);
            $table->timestamps();
        });

        Schema::create('report_accusers', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('report_id')->unsigned();
            $table->bigInteger('user_id');
            $table->text('reason');
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
        Schema::dropIfExists('reports');
        Schema::dropIfExists('report_accusers');
    }

}
