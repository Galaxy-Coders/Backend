<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['image', 'name', 'birthDay', 'deathDay', 'bio', 'creativityBio', 'country'];
    use HasFactory;
}
