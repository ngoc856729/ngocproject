<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oders extends Model
{
    protected $table = 'oders';
    protected $fillable = ['id','id_course','status','price','payment_method','total','created_at','updated_at'];
    use HasFactory;
    use HasFactory;
}
