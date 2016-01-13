<?php

class PostTableSeeder extends Seeder {

	public function run()
	{
		$post1 = new Post();
		$post1->title = '1st Blog Post';
		$post1->username = 'admin';
		$post1->date = '2016-01-11';
		$post1->description = 'This is my first blog post on my laravel blog';
		$post1->user_id = 1;
		$post1->save();

		$post2 = new Post();
		$post2->title = '2nd Blog Post';
		$post2->username = 'admin';
		$post2->date = '2016-01-11';
		$post2->description = 'This is my second blog post.';
		$post2->user_id= 1;
		$post2->save();

		$post3 = new Post();
		$post3->title = '3rd Blog Post';
		$post3->username = 'admin';
		$post3->date = '2016-01-11';
		$post3->description = 'This is my third blog post';
		$post3->user_id = 1;
		$post3->save();
	}
}