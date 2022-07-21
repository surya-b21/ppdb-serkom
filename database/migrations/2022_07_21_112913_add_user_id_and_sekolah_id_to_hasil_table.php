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
        Schema::table('hasil', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('rata_rata');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger("sekolah_id")->after('user_id');
            $table->foreign('sekolah_id')->references('id')->on('sekolah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil', function (Blueprint $table) {
            //
        });
    }
};
