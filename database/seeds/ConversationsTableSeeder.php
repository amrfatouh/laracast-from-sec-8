<?php

use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('conversations')->insert([
      'user_id' => 1,
      'title' => 'First Conversation',
      'body' => 'body of first conversation',
      'best_reply_id' => 1,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('conversations')->insert([
      'user_id' => 1,
      'title' => '2nd Conversation',
      'body' => 'body of 2nd conversation',
      'best_reply_id' => 1,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
    DB::table('conversations')->insert([
      'user_id' => 2,
      'title' => 'Third Conversation',
      'body' => 'body of 3rd conv',
      'best_reply_id' => 1,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }
}
