<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_system extends Model
{
    protected $table = 'users_system';
    protected $fillable = ['id','name','id_roles','passwords','email','phone','status','created_at','updated_at'];
    use HasFactory;
}
