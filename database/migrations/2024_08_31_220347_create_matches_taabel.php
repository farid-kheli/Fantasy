<?php

use App\Models\Club;
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
            $table->integer('Home');
            $table->integer('Away');
            $table->integer('FixturN');
            $table->dateTime('Time')->nullable();
            $table->dateTime('EndTime')->nullable();
            $table->integer('GoalHome')->Nullable();
            $table->integer('GoalAway')->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    function getCub($id){
        return Club::where('id',$id)->first();
    }
    
};
