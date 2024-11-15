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
        Schema::create('fixturs', function (Blueprint $table) {
            $table->id();
            $table->string('team0');
            $table->string('team1');
            $table->string('team2');
            $table->string('team3');
            $table->string('team4');
            $table->string('team5');
            $table->string('team6');
            $table->string('team7');
            $table->string('team8')->nullable();
            $table->string('team9')->nullable();
            $table->string('team10')->nullable();
            $table->string('team11')->nullable();
            $table->string('team12')->nullable();
            $table->string('team13')->nullable();
            $table->string('team14')->nullable();
            $table->dateTime('datendtime');
            $table->timestamps();
        });
    }
};