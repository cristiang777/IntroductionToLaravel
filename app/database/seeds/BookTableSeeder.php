<?php

class BookTableSeeder extends Seeder {
	
	public function run() {
		
		Book::truncate();

		Book::create([
			'title'=>'Journey to the center of the World',
			'writer'=> 'Jules Verne',
			'user_id'=> 1
		]);

		Book::create([
			'title'=>'The adventures of Tom Sawyer',
			'writer'=> 'Mark Twain',
			'user_id'=> 2
		]);

		Book::create([
			'title'=>'Harry Potter',
			'writer'=> 'J.K. Rowling',
			'user_id'=> 3
		]);
	}
}