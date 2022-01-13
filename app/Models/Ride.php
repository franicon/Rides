<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;
    protected $table = 'rides';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'founded', 'description',];
    
    public function carmodels (){
        return $this->hasMany(CarModel::class);
    }

    public function engine(){
        return $this->hasManyThrough(Engines::class, CarModel::class,'ride_id', 'model_id');
    }
}