<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function permissios(){
        return $this->hasMany('App\Models\Permission');
    }
    public function inscriptions(){
        return $this->hasMany('App\Models\Inscription');
    }
    // public function address(){
    //     return $this->hasMany('App\Models\Address');
    // }
    public function reviews(){
        return $this->hasMany('App\Models\Reviews');
    }
    public function relates_events(){
        return $this->hasMany('App\Models\RelatesEvent');
    }
}
