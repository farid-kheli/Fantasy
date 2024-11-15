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
        Schema::create('fixturteams', function (Blueprint $table) {
            $table->id();
            $table->integer('TeamID');
            $table->integer('FixturN');
            $table->integer('player1')->nullable();
            $table->integer('player2')->nullable();
            $table->integer('player3')->nullable();
            $table->integer('player4')->nullable();
            $table->integer('player5')->nullable();
            $table->integer('player6')->nullable();
            $table->integer('player7')->nullable();
            $table->integer('player8')->nullable();
            $table->integer('player9')->nullable();
            $table->integer('player10')->nullable();
            $table->integer('player11')->nullable();
            $table->string('formaton')->default('4-3-3');
            $table->timestamps();
        });
    }
};
