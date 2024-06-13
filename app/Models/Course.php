<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'classname',
        'nameteacher',
        'titleteacher', 
        'imageteacher',
        'price', 
        'childage', 
        'time', 
        'Capacity',
];
}
