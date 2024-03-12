<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    protected $fillable = ['id','name','role_id_education','price','course_description','course_time','users_limit','created_at','updated_at'];
    use HasFactory;
}
