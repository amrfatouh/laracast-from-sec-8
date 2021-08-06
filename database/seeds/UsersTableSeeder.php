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
      'is_admin' => false,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('users')->insert([
      'name' => 'Mr Wanderer',
      'email' => 'mr.wanderer14@gmail.com',
      'password' => Hash::make('hello123'),
      'is_admin' => false,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('users')->insert([
      'name' => 'Mr Admin',
      'email' => 'admin@example.com',
      'password' => Hash::make('hello123'),
      'is_admin' => true,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}
