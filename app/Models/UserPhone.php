<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPhone extends Model
{
    //HasFactory, habilitando para dados teste (população dos dados)
    use HasFactory, SoftDeletes;
}
