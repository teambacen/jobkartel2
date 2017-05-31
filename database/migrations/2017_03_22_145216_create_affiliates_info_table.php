<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliatesInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('postcode');
            $table->string('country');
            $table->string('state');
            $table->string('bankname');
            $table->string('account_name');
            $table->string('account_number');
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
        Schema::dropIfExists('affiliate_info');
    }
}
