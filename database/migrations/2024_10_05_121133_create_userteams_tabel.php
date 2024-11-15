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
        Schema::create('userteams', function (Blueprint $table) {
            $table->id();
            $table->integer('User');
            $table->integer('Player1')->nullable();
            $table->integer('Player2')->nullable();
            $table->integer('Player3')->nullable();
            $table->integer('Player4')->nullable();
            $table->integer('Player5')->nullable();
            $table->integer('Player6')->nullable();
            $table->integer('Player7')->nullable();
            $table->integer('Player8')->nullable();
            $table->integer('Player9')->nullable();
            $table->integer('Player10')->nullable();
            $table->integer('Player11')->nullable();
            $table->string('Formation')->default('4-3-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
};
