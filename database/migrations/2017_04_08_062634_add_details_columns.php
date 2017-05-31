<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->string('dob');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('postal');
            $table->string('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details', function (Blueprint $table) {
          $table->dropColumn('dob');
          $table->dropColumn('nationality');
          $table->dropColumn('email');
          $table->dropColumn('phone');
          $table->dropColumn('address');
          $table->dropColumn('city');
          $table->dropColumn('postal');
          $table->dropColumn('country');
        });
    }
}
