<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         db::table('users')->insert([
        'name'=>'admin',
        'email'=>'berylheldy@asgira.com',
        'password'=>encrypt('admin123'),
        'role'=>'admin'
        ]);
    }
}
