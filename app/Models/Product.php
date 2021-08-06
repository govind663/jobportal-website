<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        // =============== Employe Basic Details =============================
        'fname',
        'lname',
        'age',
        'gender',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'web',
        'address',
        'about',
        'image',

        // =============== Employe Education =============================
        'ssc_board',
        'ssc_roll_no',
        'ssc_result',
        'ssc_passing_year',

        'hsc_board',
        'hsc_roll_no',
        'hsc_result',
        'hsc_passing_year',

        'grad_exam_type',
        'grad_result',
        'grad_field',
        'grad_pass_year',
        'grad_university',
        'grad_duration',

        'ms_exam_type',
        'ms_result',
        'ms_subject',
        'ms_pass_year',
        'ms_university',
        'ms_duration',

        // =============== Employe Work Experience =============================
        'cname',
        'jposition',
        'cfrom',
        'cto',
        'job_experience',
        'image1',

        // =============== Employe Skills =============================
        'skill'
    ];
}
