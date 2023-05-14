<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EnglishProficiency;

class EnglishProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proficiencies = 
            [
                'Beginner A1/A2',
                'Intermediate B1/B2',
                'Advanced C1/C2',
                'Native',
            ];
        DB::table("english_proficiencies")->truncate();
        foreach($proficiencies as $key => $proficiencie) {
            EnglishProficiency::create(['name' => $proficiencie]);
        }
    }
}
