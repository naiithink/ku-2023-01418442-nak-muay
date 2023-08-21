<?php

namespace App\Models;

use App\Models\Enums\EventStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function managers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'event_managers', 'event_id', 'user_id');
    }

    public function attendees(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'event_attendees', 'event_id', 'user_id')->withPivot('description');
    }

    public function getStatus(): EventStatusEnum
    {
        return $this->status;
    }

    public function setStatus(EventStatusEnum $status)
    {
        return $this->status = $status;
    }

    public function currentAttendeeCount(): int
    {
        return $this->attendees->count();
    }

    public function isAttendeeFull(): bool
    {
        return $this->attendee_capacity >= $this->currentAttendeeCount();
    }

    public function isManager(string $user_id): bool
    {
        return $this->managers->contains($user_id);
    }

    public function isAttendee(string $user_id): bool
    {
        return $this->attendees->contains($user_id);
    }
}
