<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'role',
        'years',
        'primary_skill',
        'years_of_experience',
        'english_proficiency',
        'job_type',
        'remote_job',
        'full_time',
        'like_to_relocate',
        'relocate_countries',
        'country_of_residence',
        'country_of_citizenship',
        'current_salary',
        'expected_salary',
        'name',
        'email',
        'phone'
    ];
}
