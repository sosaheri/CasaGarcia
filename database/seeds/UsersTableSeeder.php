<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Heriberto Sosa',
            'email' => 'sosaheriberto2001@gmail.com',
            'password' => bcrypt('venezuela'),
            'role' => 0,
        ]);
    }
}
