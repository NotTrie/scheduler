<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Period extends Model
{
    use HasFactory;

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'period_id');
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class, 'period_id');
    }

    public function assistants(): BelongsToMany
    {
        return $this->belongsToMany(Assistant::class, 'assistant_periods', 'period_id')
                    ->withPivot('slot_used');
    }
}
