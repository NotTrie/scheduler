<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    use HasFactory;

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function assistants(): BelongsToMany
    {
        return $this->belongsToMany(Assistant::class, 'assistant_skills', 'skill_id', 'assistant_id')
            ->withPivot('proficiency_level')
            ->withTimestamps();
    }
}
