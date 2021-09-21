<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticle extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(TypeArticle::class, 'propriete_article_id', 'id');
    }

    public function articles(){
        return $this->belongsToMany(Article::class, 'article_propriete', 'propriete_article', 'article_id');
    }
}
