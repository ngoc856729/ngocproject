<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bill';
    protected $fillable = ['id','id_oders','code','status','price','payment_method','total','created_at','updated_at'];
    use HasFactory;
}
