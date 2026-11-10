<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'name'])]
class Habit extends Model
{
    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);
    
    }

    public function HabitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
