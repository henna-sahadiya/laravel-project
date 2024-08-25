<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;        
use App\Models\Department;   
use App\Models\Designation;

class userseeder extends Seeder
{
    public function run()
    {

        $departmentId = Department::inRandomOrder()->first()->id;
        $designationId = Designation::inRandomOrder()->first()->id;

        User::create([
            'name' => 'John Due',
            'fk_department' => $departmentId,
            'fk_designation' => $designationId,
            'phone_number' => '123-456-7890',
        ]);

        User::insert([
            [
                'name' => 'Tommy Mark',
                'fk_department' => Department::inRandomOrder()->first()->id,
                'fk_designation' => Designation::inRandomOrder()->first()->id,
                'phone_number' => '234-567-8901',
            ],
        ]);
    }
}
