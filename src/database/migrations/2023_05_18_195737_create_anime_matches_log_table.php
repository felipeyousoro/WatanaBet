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
        Schema::create('watanabet.anime_matches_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_1_id')->constrained('watanabet.anime_teams');
            $table->foreignId('team_2_id')->constrained('watanabet.anime_teams');
            $table->integer('team_1_score');
            $table->integer('team_2_score');
            $table->dateTime('game_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watanabet.anime_matches_log');
    }
};
