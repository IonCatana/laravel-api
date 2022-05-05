<?php

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $post = new Post();            
            $post->title = $faker->sentence(2);
            $post->content = $faker->text();
            $post->slug = Str::slug($post->title);
            $post->save();
        }
    }
}
