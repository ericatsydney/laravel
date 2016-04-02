<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class userTest extends TestCase
{
  /**
   * First test
   *
   * @return void
   */
  public function test_user_name_is_as_expected()
  {
    // Given and when
    $user = factory(User::class)->make([
      'name' => 'Abigail',
    ]);
    // Then

    $this->assertEquals('Abigail', $user->name);
  }
}
