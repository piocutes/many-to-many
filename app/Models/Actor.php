<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class);
    }
}