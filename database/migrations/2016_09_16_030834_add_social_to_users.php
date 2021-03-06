<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','nick');
            $table->string('email')->nullable()->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('nick',25)->change();
            $table->unique('nick');
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
            $table->string('email')->change();
            $table->dropUnique('users_nick_unique');
            $table->renameColumn('nick','name');
            $table->string('name');
        });
    }
}
