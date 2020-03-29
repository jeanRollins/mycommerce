<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Javiera Masiel',
            'email'     => 'javiera@gmail.com',
            'type_user' => 1,
            'password'  =>  Hash::make('123456'),
        ]);
    }
}
