<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //préciser les champs remplissables
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];
}
