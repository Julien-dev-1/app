<?php

use Illuminate\Database\Seeder;
Use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        for ($i=1; $i < 11; $i++)
        {
            User::create([
                'name' => "John$i",
                'firstname' => "Doe$i",
                'universite' => "Mahajanga",
                'email' => "JohnDoe$i@email.fr",
                'password' => Hash::make('11111111')
            ]);
        };
    }
}
