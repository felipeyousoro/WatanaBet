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
        Schema::create('watanabet.watanagacha_rewards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();

            /*
             *  Rarity in (1, 2, 3, 4, 5)
             *  C, UC, R, SSR, UR
             */
            $table->integer('rarity')->default(1);

            $table->integer('quantity')->default(1);
            $table->string('image_path', 2048)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watanabet.watanagacha_rewards');
    }
};
