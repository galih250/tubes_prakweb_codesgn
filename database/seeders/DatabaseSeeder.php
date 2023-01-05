<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Codesgn',
            'username' => 'codesgn',
            'email' => 'codesgn@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'name' => 'Galih',
            'username' => 'galih',
            'email' => 'galih@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'name' => 'Rahman',
            'username' => 'rahman',
            'email' => 'rahman@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'name' => 'Hendra',
            'username' => 'hendra',
            'email' => 'hendra@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
