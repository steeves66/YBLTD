<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatutLocation extends Model
{
    use HasFactory;

    protected $table = 'statut_locations';

    public function locations(){
        return $this->hasMany(Location::class);
    }
}
