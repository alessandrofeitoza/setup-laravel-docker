<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory; //trait

    protected $fillable = [
        'name', 
        'type', 
        'description', 
        'price',
        'quantity', 
    ];
}
