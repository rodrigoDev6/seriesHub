<?php

namespace App\Models;

use App\Models\User;
use App\Models\Season;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'series_description',
        'evaluation_note',
        'release_date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function seasons(): HasMany
     {
        return $this->hasMany(Season::class);
     }
}
