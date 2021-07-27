<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model

{
    use HasFactory;
    // when we submit something to the database it will take the array and automatically turn
    // into a json string
    // when we get that json string back it will automatically turn back into an array
    // == casting
    protected $casts = [
        'optional' => 'array'
    ];
    
}
