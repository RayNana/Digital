<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            Eloquent::unguard();
            DB::table('posts')->truncate();
            Post::create(['title' => 'はじめてのLaravel', 'body' => 'Hello, Laravel!']);
	}

}
