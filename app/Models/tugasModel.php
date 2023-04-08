<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugasModel extends Model
{
    protected $table = 'table_blog';
    //protected $fillable = ['author','title','body','keyword'];
     protected $guarded = ['id'];
}
