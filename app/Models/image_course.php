<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_course extends Model
{
    protected $table = 'image_course';
    protected $fillable = ['id','name','path','id_course','created_at','updated_at'];
    use HasFactory;
}
