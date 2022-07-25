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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('donation_type_id');
            $table->string('donation_name');
            $table->string('donation_amount');
            $table->string('donation_condition')->nullable()->comment("used,fresh");
            $table->string('used_time')->nullable();
            $table->string('donation_quantity');
            $table->string('donation_weight')->nullable();
            $table->string('collection_address');
            $table->string('note')->nullable();
            $table->integer('status')->default(false);
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
        Schema::dropIfExists('donations');
    }
};
