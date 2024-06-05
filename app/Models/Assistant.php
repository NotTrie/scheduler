<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Assistant extends Model
{
    use HasFactory;

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class, 'assistant_id');
    }

    public function periods(): BelongsToMany
    {
        return $this->belongsToMany(Period::class, 'assistant_periods', 'assistant_id', 'period_id')
            ->withPivot('room_id', 'slot_used')
            ->withTimestamps();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
