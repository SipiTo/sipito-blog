<?php

use Illuminate\Database\Seeder;
use Sipi\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Posts::class, 80)->create();
    }
}
