<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('Home');
            $table->string('Away');
            $table->dateTime('Time')->nullable();
            $table->dateTime('EndTime')->nullable();
            $table->integer('firstHome')->Nullable();
            $table->integer('firstAway')->Nullable();
            $table->integer('secendHome')->Nullable();
            $table->integer('secendAway')->Nullable();
            $table->integer('thirdeHome')->Nullable();
            $table->integer('thirdeAway')->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
};
