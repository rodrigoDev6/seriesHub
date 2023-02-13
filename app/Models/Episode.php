<?php

namespace App\Models;

use App\Models\Season;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'episode_number',
        'episode_watched',
        'assisted_in',
    ];

    protected $casts = [
        'episode_watched' => 'boolean'
    ];

    public $timestamps = false;

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }

    public function scopeWatched(Builder $query) 
    {
        $query->where('episode_watched', true);
    }
}
