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
        Schema::create('donation_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('requester_id');
            $table->integer('donation_id');
            $table->integer('donor_id');
            $table->string('received_img')->nullable();
            $table->string('feedback')->nullable();
            $table->boolean('status')->default(false)->comment('0=waiting_for_confirmation, 1=confirmed_donation, 2=received_donation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_requests');
    }
};
