<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary_Review extends Model
{
    use HasFactory;
    protected $table = 'salary_reviews';
    protected $fillable=[
    'employ_id',
    'last_rewiew',
    'comimg_rewiew'
];
}
