<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('affiliates_stats', function (Blueprint $table) {
            $table->integer('affiliate_id')->unsigned()->index();
            $table->integer('payment_id')->unsigned()->index();
            $table->foreign('affiliate_id')->references('id')->on('affiliates')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affiliates_stats', function (Blueprint $table) {
            $table->dropColumn('affiliate_id');
            $table->dropColumn('payment_id');
        });
    }
}
