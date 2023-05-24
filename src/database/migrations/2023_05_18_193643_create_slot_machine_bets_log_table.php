<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watanabet.slot_machine_bets_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('watanabet.users');
            $table->foreignId('slot_machine_results_id')->constrained('watanabet.slot_machine_results');
            $table->decimal('bet_amount', 10, 2);
            $table->decimal('win_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watanabet.slot_machine_bets_log');
    }
};
