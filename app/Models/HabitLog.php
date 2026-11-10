<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Eloquent\Attributes\Fillable;

#[Fillable(['user_id', 'habit_id', 'completed_at'])]
class HabitLog extends Model
{
    use HasFactory;

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Habit(): BelongsTo
    {

        return $this->BelongsTo(Habit::class);

    }
}
