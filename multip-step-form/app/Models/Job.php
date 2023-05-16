<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'phone',
        'highest_education',
        'application_for'
    ];

    public function getRole(): HasOne
    {
        return $this->hasOne(Role::class, 'id', 'role');
    }

    public function year(): HasOne
    {
        return $this->hasOne(TotalYearsOfWorkExperience::class, 'id', 'years');
    }

    public function getPrimarySkill(): HasOne
    {
        return $this->hasOne(PrimarySkill::class, 'id', 'primary_skill');
    }

    public function getYearsOfExperience(): HasOne
    {
        return $this->hasOne(YearsOfExperienceWithPrimarySkill::class, 'id', 'years_of_experience');
    }

    public function getEnglishProficiency(): HasOne
    {
        return $this->hasOne(EnglishProficiency::class, 'id', 'english_proficiency');
    }

    public function CountryOfResidence(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_of_residence');
    }

    public function CountryOfCitizenship(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_of_citizenship');
    }
}
