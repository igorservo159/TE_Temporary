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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('store_id')->references('id')->on('stores');

            $table->foreign('role_id')->references('id')->on('roles');

            $table->foreign('sponsor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['sponsor_id']);

            $table->dropForeign(['store_id']);

            $table->dropForeign(['role_id']);
        });
    }
};
