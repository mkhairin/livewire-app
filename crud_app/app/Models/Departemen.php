<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'departement_name',
        'departement_aliases',
        'departement_description',
    ];

}
