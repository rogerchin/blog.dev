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
		$user->birthday = '1991-01-11';
		$user->phone_number = '1234567890';
		$user->zip_code = '78230';
		$user->save();
	}
}