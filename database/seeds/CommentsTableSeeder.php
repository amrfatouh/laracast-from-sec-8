<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('comments')->insert([
      'conversation_id' => 1,
      'user_id' => 1,
      'body' => 'first comment of first conversation',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('comments')->insert([
      'conversation_id' => 1,
      'user_id' => 2,
      'body' => 'second comment of first conversation',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('comments')->insert([
      'conversation_id' => 2,
      'user_id' => 1,
      'body' => '1st comment of 2nd conversation',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('comments')->insert([
      'conversation_id' => 3,
      'user_id' => 1,
      'body' => '1st comment of 3rd conversation',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('comments')->insert([
      'conversation_id' => 3,
      'user_id' => 2,
      'body' => '2nd comment of 3rd conversation',
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}
