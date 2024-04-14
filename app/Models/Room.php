<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'owner_user_id',
        'is_private'
    ];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class, 'owner_user_id', 'id');
    }

    public function messages(): HasMany {
        return $this->hasMany(Message::class, 'room_id', 'id');
    }

    public function messagesLatest() {
        return $this->messages()->orderByDesc('id');
    }
}
