<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = 
            [
                'Audit Controller',
                'CF',
                'Tax Controller',
            ]
        ;
        DB::table("roles")->truncate();
        foreach($roles as $key => $role) {
            Role::create(['name' => $role]);
        }
    }
}
