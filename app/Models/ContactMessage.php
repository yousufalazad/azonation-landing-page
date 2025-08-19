<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'subject',
        'message',
        'consent',
        'ip_address',
        'user_agent',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
