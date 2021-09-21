<?php

namespace App\Models;

use App\Models\Article;
use App\Models\ProprieteArticle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeArticle extends Model
{
    use HasFactory;

    protected $table = 'type_articles';

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function proprieteArticles(){
        return $this->hasMany(ProprieteArticle::class);
    }
}
