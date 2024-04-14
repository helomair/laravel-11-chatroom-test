<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'owner_user_id',
        'is_private'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_user_id', 'id');
    }
}
