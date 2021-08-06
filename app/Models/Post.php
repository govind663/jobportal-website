<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $fillable = [
        'email',
        'job_title',
        'location',
        'category',
        'job_tags',
        'description',
        'application_url',
        'closing_date',
        'company_name',
        'web',
        'tagline',
        'image3'
    ];
}
