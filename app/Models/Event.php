<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function managers(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function attendees(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
