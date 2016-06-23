<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->smallInteger('times');
            $table->boolean('sharp_teeth');
            $table->boolean('bad_fit');
            $table->tinyInteger('calculus');
            $table->boolean('sys_treat');
            $table->text('sys_drug');
            $table->tinyInteger('sys_time');
            $table->boolean('topical_treat');
            $table->text('topical_drug');
            $table->tinyInteger('topical_time');
            $table->text('comment');
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
        Schema::drop('results');
    }
}
