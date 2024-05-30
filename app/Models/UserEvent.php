<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
    ];

    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
