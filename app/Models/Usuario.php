<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //campos que podem ser preen automaticamente...
    protected $fillable = [
        'name',
        'email'
        
    ];

    use HasFactory;
}
