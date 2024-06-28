<?php

use App\Models\Assistant;
use App\Models\Skill;
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
        Schema::create('assistant_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Assistant::class);
            $table->foreignIdFor(Skill::class);
            $table->integer('proficiency_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistant_skills');
    }
};
