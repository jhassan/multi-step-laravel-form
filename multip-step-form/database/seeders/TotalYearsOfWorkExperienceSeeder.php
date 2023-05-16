<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TotalYearsOfWorkExperience;

class TotalYearsOfWorkExperienceSeeder extends Seeder
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

        DB::table("total_years_of_work_experiences")->truncate();
        foreach($experiences as $key => $experience) {
            TotalYearsOfWorkExperience::create(['name' => $experience]);
        }
    }
}
