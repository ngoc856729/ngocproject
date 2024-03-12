<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_course extends Model
{
    protected $table = 'list_course';
    protected $fillable = ['id','name','id_course','start_date','end_date','created_at','updated_at'];
    use HasFactory;
}
