<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballGuest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',    
        'guest_name',
        'phone_number',
        'invitation',
        'status',
        'response_at',
        'guests_attended',
        'reminder',
    ];
}
