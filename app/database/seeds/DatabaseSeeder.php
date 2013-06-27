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

		// Create two dummy posts
		$this->call('SeedPostsTable');

		// Create a dummy account
		$this->call('SeedUsersTable');
	}

}