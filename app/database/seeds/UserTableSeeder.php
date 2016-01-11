<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		$user = new User();
		$user->first_name = 'Roger';
		$user->last_name = 'Chin';
		$user->username = 'admin';
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->birthday = '';
		$user->phone_number = '';
		$user->zip_code = '';
	}
}