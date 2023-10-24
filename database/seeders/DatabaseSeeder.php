<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Andi Alfi Syahrin',
            'username' => 'andialfisy'
,            'email' => 'alfi@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Wirdah Ulfahaini',
        //     'email' => 'wirdah@gmail.com',
        //     'password' => bcrypt('4321')
        // ]);

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit numquam assumenda voluptate ratione eveniet laborum reiciendis quas accusamus temporibus dolor aliquid sapiente voluptatem consequatur exercitationem sunt facere dolore totam, illum quod vero natus obcaecati quaerat dicta. Quidem omnis, debitis facilis dolor reprehenderit earum voluptatem adipisci laudantium, ipsam explicabo numquam odio temporibus, odit hic. Corrupti dolore consectetur doloremque cum eius perspiciatis reiciendis eaque. Incidunt dolorum asperiores, optio ipsum, mollitia ipsam error nam vel illum ratione voluptatibus iste et corrupti in nulla? Beatae quam officiis quae labore error, excepturi saepe unde, corrupti, illo neque laudantium eveniet consectetur iste obcaecati quod enim inventore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit numquam assumenda voluptate ratione eveniet laborum reiciendis quas accusamus temporibus dolor aliquid sapiente voluptatem consequatur exercitationem sunt facere dolore totam, illum quod vero natus obcaecati quaerat dicta. Quidem omnis, debitis facilis dolor reprehenderit earum voluptatem adipisci laudantium, ipsam explicabo numquam odio temporibus, odit hic. Corrupti dolore consectetur doloremque cum eius perspiciatis reiciendis eaque. Incidunt dolorum asperiores, optio ipsum, mollitia ipsam error nam vel illum ratione voluptatibus iste et corrupti in nulla? Beatae quam officiis quae labore error, excepturi saepe unde, corrupti, illo neque laudantium eveniet consectetur iste obcaecati quod enim inventore.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit numquam assumenda voluptate ratione eveniet laborum reiciendis quas accusamus temporibus dolor aliquid sapiente voluptatem consequatur exercitationem sunt facere dolore totam, illum quod vero natus obcaecati quaerat dicta. Quidem omnis, debitis facilis dolor reprehenderit earum voluptatem adipisci laudantium, ipsam explicabo numquam odio temporibus, odit hic. Corrupti dolore consectetur doloremque cum eius perspiciatis reiciendis eaque. Incidunt dolorum asperiores, optio ipsum, mollitia ipsam error nam vel illum ratione voluptatibus iste et corrupti in nulla? Beatae quam officiis quae labore error, excepturi saepe unde, corrupti, illo neque laudantium eveniet consectetur iste obcaecati quod enim inventore.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
