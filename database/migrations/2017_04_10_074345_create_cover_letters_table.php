<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('from_before');
            $table->string('from_first');
            $table->string('from_last');
            $table->string('from_phone');
            $table->string('from_email');
            $table->string('from_street');
            $table->string('from_city');
            $table->string('from_postal');
            $table->string('from_state');
            $table->string('to_before');
            $table->string('to_first');
            $table->string('to_last');
            $table->string('to_company');
            $table->string('to_department');
            $table->string('to_street');
            $table->string('to_city');
            $table->string('to_postal');
            $table->string('to_state');
            $table->string('content_subject');
            $table->string('content_date');
            $table->longtext('content_body');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cover_letters');
    }
}
