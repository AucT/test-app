<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->date('birthday');
            $table->unsignedInteger('programming_language_id');
            $table->unsignedInteger('country_id');

            $table->foreign('programming_language_id')->references('id')->on('programming_languages');
            $table->foreign('country_id')->references('id')->on('countries');


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
            $table->dropColumn(['last_name', 'birthday', 'programming_language_id', 'country_id']);
        });
    }
}
