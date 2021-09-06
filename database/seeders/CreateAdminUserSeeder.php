<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creting Admin user
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@ielts.com',
            'ielts_module' => 'NA',
            'planning_country' => 'NA',
            'password' => Hash::make('admin@2101'),
            'is_admin' => '1'
        ]);
    }
}
