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
            $table->integer('MinutePlayed');
            $table->integer('Goals');
            $table->integer('GoalAssists');
            $table->integer('BigChanceCreated');
            $table->integer('BallsIntoTheBox');
            $table->integer('PinaltiesSaved');
            $table->integer('Saves');
            $table->integer('EffectiveClearances');
            $table->integer('PenaltiesMissed');
            $table->integer('OwnGoals');
            $table->integer('YellowCard');
            $table->integer('RedCard');
            $table->integer('EffectiveDribbles');
            $table->integer('Recoveries');
            $table->integer('LostBalls');
            $table->integer('AddisionallPoints');
            $table->integer('TOTALPOINTS');
            $table->timestamps();
        });
    }


};
