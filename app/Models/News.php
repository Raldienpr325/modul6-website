<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $fillable = ["title","picture","content","is_published","user_id","category"];
    //protected $attributes = ['is_published' => 1]; default val
    public function author()
    {
        return $this->belongsToMany('App\Author','author_news', 'authors_id', 'news_id');
    }
}