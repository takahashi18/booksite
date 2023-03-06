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
            $table->string('postal_num');  // 郵便番号
            $table->string('address');  // 住所
            $table->string('tel_num'); // 電話番号
            $table->softDeletes();  // ソフトデリート
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
            $table->dropColumn('postal_num');  // 郵便番号
            $table->dropColumn('address');  // 住所
            $table->dropColumn('tel_num'); // 電話番号
            $table->dropSoftDeletes();  // ソフトデリート

        });
    }
};