<?php

namespace App\Models;

use App\Models\Tarification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DureeLocation extends Model
{
    use HasFactory;

    protected $table = 'duree_locations';

    public function tarifications(){
        return $this->hasMany(Tarification::class);
    }
}
