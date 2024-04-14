<?php

namespace App\Models;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'content'
    ];

    protected function createdAt(): Attribute {
        return Attribute::make(
            get: fn (string $timestamp) => (new DateTime($timestamp))->format('Y/m/d  h:i a')
        );
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
