<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class AssistantPeriod extends Model
{
    use HasFactory;

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function assistant(): BelongsTo
    {
        return $this->belongsTo(Assistant::class, 'assistant_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function schedule(): HasOneThrough
    {
        return $this->hasOneThrough(Schedule::class, Period::class, 'id', 'period_id');
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $exists = static::where('assistant_id', $model->assistant_id)
                ->where('period_id', $model->period_id)
                ->exists();

            if ($exists) {
                throw new \Exception("Assistant already assigned to this period.");
            }
        });
    }
}
