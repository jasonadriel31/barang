<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'jason',
            'email' => 'jason311099@gmail.com',
            'notelp' => '0895354547776',
            'password' => Hash::make('091827') 
        ]);

        $admin->assignRole('admin');

        $staff = User::create([
            'name' => 'hoky',
            'email' => 'ryuzaki23@gmail.com',
            'notelp' => '0895354547776',
            'password' => Hash::make('123456') 
        ]);
        $staff->assignrole('staff');
    }
}
