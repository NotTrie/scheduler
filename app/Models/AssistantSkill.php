<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssistantSkill extends Model
{
    use HasFactory;

    public function assistants(): HasMany
    {
        return $this->hasMany(AssistantSkill::class);
    }
}
