<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = "authors";
    protected $fillable = ["name","picture","address"];

    public function news()
    {
        return $this->belongsToMany('App\News','author_news', 'authors_id', 'news_id');
    }
    
}