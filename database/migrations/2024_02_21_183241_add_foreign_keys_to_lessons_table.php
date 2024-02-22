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
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign(['student_id'])->references(['id'])->on('users');
            $table->foreign(['tutor_id'])->references(['id'])->on('users');
            $table->foreign(['contract_id'])->references(['id'])->on('contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['tutor_id']);
            $table->dropForeign(['contract_id']);
        });
    }
};
