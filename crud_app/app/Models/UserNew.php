<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserNew extends Authenticatable implements HasFactory, Model
{
    use HasFactory;

    protected $table = "user_news";

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'position_id'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
