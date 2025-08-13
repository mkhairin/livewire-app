<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function userNew()
    {
        return $this->hashMany(UserNew::class);
    }
}
