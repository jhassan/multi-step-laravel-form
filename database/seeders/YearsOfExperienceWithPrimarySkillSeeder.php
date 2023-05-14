<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\YearsOfExperienceWithPrimarySkill;

class YearsOfExperienceWithPrimarySkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfinstances = 15;
        $i = 1;
        $experiences = array();
        while ($i <= $numberOfinstances) {
            $experiences[] = $i.' year';  
            $i++;
        }

        DB::table("years_of_experience_with_primary_skills")->truncate();
        foreach($experiences as $key => $experience) {
            YearsOfExperienceWithPrimarySkill::create(['name' => $experience]);
        }
    }
}
