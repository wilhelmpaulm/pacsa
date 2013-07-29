<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('users')->delete();

        $users = array(
            ['username'=> "wilhelmpaulm", 'password'=> Hash::make('pawie2062'), 'type'=>"admin", 'email'=>"wilhelmpaulm@gmail.com"]
        );

        // Uncomment the below to run the seeder
         DB::table('users')->insert($users);
    }

}