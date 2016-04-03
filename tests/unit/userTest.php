<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class userTest extends TestCase
{
  /**
   * @test
   */
  public function it_has_user_name()
  {
    $user = factory(User::class)->make([
      'name' => 'Abigail',
    ]);
    $this->assertEquals('Abigail', $user->name);
  }

  /**
   * @test
   */
  public function it_has_email()
  {
    $user = factory(User::class)->make([
      'email' => 'eric.g.x.tan@gmail.com'
    ]);
    $this->assertEquals('eric.g.x.tan@gmail.com', $user->email);
  }
}
