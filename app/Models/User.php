<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'middle_name', 'last_name', 'login', 'password', 'phone', 'role', 'email',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function fullName()
    {
        return $this->name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
}