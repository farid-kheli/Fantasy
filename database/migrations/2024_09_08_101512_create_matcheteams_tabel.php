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
        Schema::create('matcheteams', function (Blueprint $table) {
            $table->id();
            $table->integer('matcheID');
            $table->integer('Home1')->nullable();
            $table->integer('Home2')->nullable();
            $table->integer('Home3')->nullable();
            $table->integer('Home4')->nullable();
            $table->integer('Home5')->nullable();
            $table->integer('Home6')->nullable();
            $table->integer('Home7')->nullable();
            $table->integer('Home8')->nullable();
            $table->integer('Home9')->nullable();
            $table->integer('Home10')->nullable();
            $table->integer('Home11')->nullable();
            $table->string('Homeformaton')->default('4-3-3');
            $table->integer('Away1')->nullable();
            $table->integer('Away2')->nullable();
            $table->integer('Away3')->nullable();
            $table->integer('Away4')->nullable();
            $table->integer('Away5')->nullable();
            $table->integer('Away6')->nullable();
            $table->integer('Away7')->nullable();
            $table->integer('Away8')->nullable();
            $table->integer('Away9')->nullable();
            $table->integer('Away10')->nullable();
            $table->integer('Away11')->nullable();
            $table->string('Awayformaton')->default('4-3-3');
            $table->integer('HomeScoor')->default(0);
            $table->integer('AwayScoor')->default(0);
            $table->integer('HomePosition')->default(50);
            $table->integer('AwayPosition')->default(50);
            $table->integer('HomeShoot')->default(0);
            $table->integer('AwayShoot')->default(0);
            $table->integer('HomeOnterget')->default(0);
            $table->integer('AwayOnterget')->default(0);
            $table->integer('homeFowls')->default(0);
            $table->integer('AwayFowls')->default(0);
            $table->integer('homeYelow')->default(0);
            $table->integer('AwayYelow')->default(0);
            $table->integer('homeRed')->default(0);
            $table->integer('AwayRed')->default(0);
            $table->integer('homecorners')->default(0);
            $table->integer('Awaycorners')->default(0);
            $table->integer('homeoffsieds')->default(0);
            $table->integer('Awayoffsieds')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
