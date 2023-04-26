<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_accomodation',
        'id_user',
        'start_date',
        'end_date',
        'price',
        'state'
    ];
}
