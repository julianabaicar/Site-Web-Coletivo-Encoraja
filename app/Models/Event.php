<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'date', 
        'time', 
        'modality', 
        'status',           
        'type', 
        'target_audience', 
        'vacancies', 
        'social_vacancies', 
        'regular_vacancies',    
        'material', 
        'interest_area', 
        'price'
    ];

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }
    public function address(){
        return $this->hasOne(Address::class);
    }
    public function reviews(){
        return $this->hasMany(Reviews::class);
    }
    public function relates_events(){
        return $this->hasMany(RelatesEvent::class);
    }
}
