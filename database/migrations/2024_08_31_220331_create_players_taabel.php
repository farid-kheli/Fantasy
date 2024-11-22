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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('situation_id');
            $table->integer('Price');
            $table->integer('Club')->nullable();
            $table->string('Position');
            $table->string('Pictur');
            $table->integer('Points')->default(0);
            $table->integer('Gols')->default(0);
            $table->integer('assiste')->default(0);
            $table->integer('Yellow')->default(0);
            $table->integer('red')->default(0);
            $table->float('Avrege')->default(0.0);
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

