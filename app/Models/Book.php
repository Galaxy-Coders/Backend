<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['cover', 'title', 'author', 'pages', 'date', 'ganre', 'about', 'audio', 'document'];
    use HasFactory;
}
