<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'Audit Controller',
                'CF',
                'Tax Controller',
            ]
        ];

        DB::truncate('roles');
        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
