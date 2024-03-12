<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_course extends Model
{
    protected $table = 'roles_course';
    protected $fillable = ['id','name','role_id_education','created_at','updated_at'];
    use HasFactory;
}
