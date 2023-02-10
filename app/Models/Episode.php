<?php

namespace App\Models;

use App\Models\Season;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'season_id',
        'episode_number',
        'watched_episode',
        'assited_in',
    ];

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }
}
