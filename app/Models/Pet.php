<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;

class Pet extends Model
{
    use HasFactory; 

    protected $table = 'pets';

    protected $fillable = [
        'nickname',
        'kinorg_id',
        'breed_id',
        'color_id',
        'gender',
        'date_of_birth',
        'father_id',
        'mother_id',
        'father_name',
        'mother_name',
    ];
 

}
