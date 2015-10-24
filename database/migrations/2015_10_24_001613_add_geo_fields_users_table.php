<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGeoFieldsUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users', function ($table) {
      $table->string('address')->unique();
      $table->float('lat');
      $table->float('lng');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function ($table) {
      $table->dropColumn(['address', 'lat', 'lng']);
    });
  }
}
