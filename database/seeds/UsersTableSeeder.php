<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'name' => 'the admin user',
          'email' => 'iamadmin@gmail.com',
          'role' => 'admin',
          'password' => 'admin123',
        ]);
        DB::table('users')->insert([
          'name' => 'the techie',
          'email' => 'iamatechie@gmail.com',
          'role' => 'techie',
          'password' => 'techie123',
        ]);
      }
}
