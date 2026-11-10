<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'habit_id', 'completed_at'])]
class HabitLog extends Model
{
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Habit(): BelongsTo
    {

        return $this->BelongsTo(Habit::class);

    }
}
