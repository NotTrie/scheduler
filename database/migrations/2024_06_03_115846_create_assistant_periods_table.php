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
        Schema::create('assistant_periods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assistant_id')->constrained('assistants');
            $table->foreignId('period_id')->constrained('periods');
            $table->foreignId('room_id')->constrained('rooms');
            $table->biginteger('slot_used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistant_periods');
    }
};
