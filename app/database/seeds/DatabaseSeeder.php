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

		// $this->call('UserTableSeeder');
//		$this->call('AnimalsTableSeeder');
		$this->call('RegistrationsTableSeeder');
		$this->call('Registration_detailsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}