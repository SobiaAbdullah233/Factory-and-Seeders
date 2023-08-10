<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable=[
        'employ_id',
        'salary',
        'salary_date'
    ];

    protected $table = 'salaries';
}
