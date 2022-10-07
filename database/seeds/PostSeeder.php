<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i = 0; $i < 10; $i++){
            $newPost = new Post();
            $newPost->title = $faker->word();
            $newPost->slug = $faker->lexify('id-????');
            $newPost->description = $faker->paragraph();
            $newPost->save();
        }
    }
}
