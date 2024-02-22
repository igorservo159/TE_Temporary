<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('users');

            $table->foreign('tutor_id')->references('id')->on('users');

            $table->foreign('sponsor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->dropForeign(['student_id']);

            $table->dropForeign(['tutor_id']);

            $table->dropForeign(['sponsor_id']);
        });
    }
};
