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
        Schema::create('watanabet.watanagacha_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('watanabet.users');
            $table->foreignId('reward_id')->constrained('watanabet.watanagacha_rewards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watanabet.watanagacha_log');
    }
};
