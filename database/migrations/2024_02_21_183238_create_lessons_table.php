<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tutor_id')->index();
            $table->integer('student_id')->index();
            $table->integer('contract_id')->index();
            $table->string('observations');
            $table->date('date')->index();
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
