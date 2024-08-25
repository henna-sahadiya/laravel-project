<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;         
use App\Models\Department;   
use App\Models\Designation;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            DesignationSeeder::class,
            UserSeeder::class,
        ]);
    }
}
