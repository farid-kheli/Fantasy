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
        Schema::create('playepoints', function (Blueprint $table) {
            $table->id();
            $table->integer('PlayerID');
            $table->integer('FixtureN');
            $table->integer('MatchePlayed')->default(0);
            $table->integer('Goals')->default(0);
            $table->integer('GoalAssists')->default(0);
            $table->integer('BigChanceCreated')->default(0);
            $table->integer('BallsIntoTheBox')->default(0);
            $table->integer('PinaltiesSaved')->default(0);
            $table->integer('Saves')->default(0);
            $table->integer('EffectiveClearances')->default(0);
            $table->integer('PenaltiesMissed')->default(0);
            $table->integer('OwnGoals')->default(0);
            $table->integer('YellowCard')->default(0);
            $table->integer('RedCard')->default(0);
            $table->integer('EffectiveDribbles')->default(0);
            $table->integer('Recoveries')->default(0);
            $table->integer('LostBalls')->default(0);
            $table->integer('AddisionallPoints')->default(0);
            $table->integer('TOTALPOINTS')->default(0);
            $table->timestamps();
        });
    }


};
