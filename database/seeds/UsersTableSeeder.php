<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Amr Fatouh',
      'email' => 'amrfatouh1499@gmail.com',
      'password' => Hash::make('hello123'),
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('users')->insert([
      'name' => 'Mr Wanderer',
      'email' => 'mr.wanderer14@gmail.com',
      'password' => Hash::make('hello123'),
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}
