<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TotalYearsOfWorkExperience;
use App\Models\YearsOfExperienceWithPrimarySkill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(TotalYearsOfWorkExperienceSeeder::class);
        $this->call(YearsOfExperienceWithPrimarySkillSeeder::class);
        $this->call(EnglishProficiencySeeder::class);
        $this->call(PrimarySkillSeeder::class);
    }
}
