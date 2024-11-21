<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatisfactionSurvey extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'satisfaction_surveys';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'faculty',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
    ];
}
