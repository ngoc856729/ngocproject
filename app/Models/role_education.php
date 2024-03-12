<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_education extends Model
{
    protected $table = 'roles_education';
    protected $fillable = ['id','name','created_at','updated_at'];
    use HasFactory;
}
