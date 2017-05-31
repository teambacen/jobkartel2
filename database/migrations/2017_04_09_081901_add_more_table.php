<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('educations', function (Blueprint $table) {
            $table->string('graduate_month');
            $table->string('start_year');
            $table->string('start_month');
            $table->string('description');
            $table->string('city');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('educations', function (Blueprint $table) {
          $table->dropColumn('graduate_month');
          $table->dropColumn('start_year');
          $table->dropColumn('start_month');
          $table->dropColumn('description');
          $table->dropColumn('city');
          $table->dropColumn('state');
        });
    }
}
