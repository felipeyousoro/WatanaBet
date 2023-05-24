<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watanabet.slot_machine_results', function (Blueprint $table) {
            $table->id();
            $table->string('result')->unique();
            $table->decimal('odd');
            $table->timestamps();
        });

        DB::table('watanabet.slot_machine_results')->insert([
            ['result' => 'Nothing', 'odd' => 0],
            ['result' => 'Triple Aikatsu', 'odd' => 1.5],
            ['result' => '999', 'odd' => 2],
            ['result' => 'Triple Myrtle', 'odd' => 5],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watanabet.slot_machine_results');
    }
};
