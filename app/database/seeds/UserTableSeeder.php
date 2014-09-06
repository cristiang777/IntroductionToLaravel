<?php

class UserTableSeeder extends Seeder {
	
	public function run(){

		User::truncate();
		
		User::create([
			'username'=>'cristian',
			'email'=>'cristian@library.com',
			'password'=>'1234'
		]);

		User::create([
			'username'=>'michael',
			'email'=>'michael@library.com',
			'password'=>'1234'
		]);

		User::create([
			'username'=>'rachel',
			'email'=>'rachel@library.com',
			'password'=>'1234'
		]);

	}
}