<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'phone',
        'position_applying',
        'portfolio_website',
        'Salary_requirements',
        'job_starting_date',
        'radio',
        'last_company_worked',
        'message',
        'resume'
    ];
}
