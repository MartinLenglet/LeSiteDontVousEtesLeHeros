<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Champs pour utiliser plus facilement le create et le update de Eloquent
    protected $fillable = ['title', 'abstract', 'introduction', 'body'];
}
