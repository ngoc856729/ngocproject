<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_course extends Model
{
    protected $table = 'history_course';
    protected $fillable = ['id','id_users_course','count_lesson','comment_teacher','created_at','updated_at'];
    use HasFactory;
}
