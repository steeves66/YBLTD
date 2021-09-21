<?php

namespace App\Models;

use App\Models\User;
use App\Models\Client;
use App\Models\Article;
use App\Models\Paiement;
use App\Models\StatutLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function statut(){
        return $this->belongsTo(StatutLocation::class, 'statut_location_id', 'id');
    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }

    public function articles(){
        return $this->belongsToMany(Article::class, 'article_location', 'location_id', 'article_id');
    }
}
