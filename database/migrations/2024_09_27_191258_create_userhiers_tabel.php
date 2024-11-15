<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userhiers', function (Blueprint $table) {
            $table->id();
            $table->integer('User');
            $table->integer('Player');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
  
};
