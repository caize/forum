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
        DB::table('users')->insert([
        	'name' => 'User',
			'email' => 'user@mail.me',
			'password' => bcrypt('secret')
		]);

		DB::table('users')->insert([
			'name' => 'Demo',
			'email' => 'demo@mail.me',
			'password' => bcrypt('secret')
		]);
    }
}
