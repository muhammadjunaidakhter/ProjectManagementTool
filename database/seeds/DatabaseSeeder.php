<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        users::create([
            'lname' => 'Muhammad Junaid',
            'fname' => 'Akhter',
            'email' => 'malikjunaid896@gmail.com',
            'company' => 'Greyneon',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        users::create([
            'lname' => 'Employee',
            'fname' => 'Employee',
            'email' => 'muhammad.junaid.greyneon@gmail.com',
            'company' => 'Greyneon',
            'password' => Hash::make('secret'),
            'role' => 2
        ]);
    }
}
