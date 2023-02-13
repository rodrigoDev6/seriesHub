<?php

namespace App\Models;

use App\Enums\SeasonStatus;
use App\Models\Series;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'series_id',
        'season_description',
        'season_number',
        'status'
    ];

    protected $casts = [
        'status' => SeasonStatus::class,
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    public function numberOfEpisodeWatched(): int 
    {
        return $this->episodes
            ->filter(fn($episodes) => $episodes->episode_watched)
            ->count();
    }
}
