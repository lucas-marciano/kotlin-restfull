<?php

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
        $faker = Faker\Factory::create();
        
        $users = App\User::all();
        $total = count($users);

        for($i = 0; $i < 500; $i++) {
            App\Post::create([
                'title' => $faker->text($maxNbChars = 30),
                'body' => $faker->text,
                'user_id' => $users[rand(1, $total - 1)]->id
            ]);
        }   
    }
}
