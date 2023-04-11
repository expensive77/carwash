<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeReservation extends Model
{
    use HasFactory;
    protected $attributes = [
        'section' => 1,
    ];
    protected $fillable = [
        'time',
        'date',
        'section',
        'user_id',
        'washing_time'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
