<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vistor extends Model
{
    use HasFactory;
    protected $fillable = ['purpose','name','phone','email','address','date','in_time'];
}
