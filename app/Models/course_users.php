<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_users extends Model
{
    protected $table = 'course_user';
    protected $fillable = ['id','id_list_course','id_user','created_at','updated_at'];
    use HasFactory;
}
