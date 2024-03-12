<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module_course extends Model
{
    protected $table = 'module_course';
    protected $fillable = ['id','name_module','description','id_course','created_at','updated_at'];
    use HasFactory;
}
