<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodations extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_accomodation',
        'name',
        'stars',
        'description',
        'image',
    ];
}
