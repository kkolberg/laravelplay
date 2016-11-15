<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rules', function (Blueprint $table) {
            $table->integer('car_id')->unsigned();
            $table->integer('rule_id')->unsigned();
            $table->string('values');
            $table->timestamps();

            $table->primary(['car_id','rule_id']);
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('rule_id')->references('id')->on('rules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_rules');
    }
}
