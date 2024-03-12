<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','name','created_at','updated_at'];
    use HasFactory;
}
