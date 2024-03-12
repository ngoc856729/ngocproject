<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar_course extends Model
{
    protected $table = 'calendar_course';
    protected $fillable = ['id','name','id_list_course','created_at','updated_at'];
    use HasFactory;
}
