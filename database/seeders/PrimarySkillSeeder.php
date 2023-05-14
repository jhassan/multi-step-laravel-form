<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PrimarySkill;

class PrimarySkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = 
            [
                'Finance',
                'Marketing',
                'Banking',
            ];
        DB::table("primary_skills")->truncate();
        foreach($skills as $key => $skill) {
            PrimarySkill::create(['name' => $skill]);
        }
    }
}
