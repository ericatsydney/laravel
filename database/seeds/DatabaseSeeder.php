<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('BlogTableSeeder');

        Model::reguard();
    }
}

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        App\Blog::truncate();

        factory(App\Blog::class, 20)->create();
    }
}