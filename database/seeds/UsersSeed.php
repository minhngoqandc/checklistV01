<?php

use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'fullname' => 'Ngo Quang Minh ',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'level' => 1,
        ]);
    }
}
