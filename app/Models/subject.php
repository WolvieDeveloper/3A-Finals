<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'student_id',
        'subject_code',
        'name',
        'description',
        'instructor',
        'schedule',
        'prelims',
        'midterms',
        'prefinals',
        'finals',
        'date_taken',
    ];

    protected $cast = [
        'grades' => 'array',
        'date_taken' => 'date',
    ];
}