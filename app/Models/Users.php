<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Blog;

class Users extends Model
{
    //use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id_user';

}
