<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::truncate();

        User::create([
            'nomer_identitas' => '2019150080',
            'email' => 'ahmadrifai@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'mahasiswa'
        ]);
    }
}
