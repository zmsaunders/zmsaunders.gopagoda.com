<?php

class SeedUsersTable extends Seeder {

        public function run()
        {
                DB::table('users')->delete();

                $user = User::create(array(
                        'email'         => 'test@example.com',
                        'password'      => Hash::make('logmein'),
                        'first_name'    => 'First',
                        'last_name'    => 'Last'
                ));
        }

}