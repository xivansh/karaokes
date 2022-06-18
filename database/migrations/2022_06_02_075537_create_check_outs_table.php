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
        Schema::create('check_outs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->integer('phone')->nullable();
            $table->datetime('booking_date');
            $table->string('hours')->nullable();
            $table->string('payment')->nullable();
            $table->unsignedBigInteger('karaoke_id')->nullable();
            $table->foreign('karaoke_id')->references('id')->on('karaokes');
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
        Schema::dropIfExists('check_outs');
    }
};
