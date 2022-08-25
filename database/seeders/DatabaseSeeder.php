<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::factory(20)->create();

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

        User::create([
            'name' => 'Faris Iftikhar Alfarisi',
            'username' => 'farisiftikharalfarisi',
            'email' => 'farisiftikharalfarisi@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('faris ganteng'),
            'no_telepon' => '088217107198',
            'alamat' => 'Ceuri No 32 Katapang Kabupaten Bandung Jawa Barat Indonesia'
        ]);


        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandikhagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Postingan Pertama',
        //     'slug' => 'postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam?',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti libero officia harum qui voluptatibus suscipit facilis beatae culpa. Aliquid praesentium magni non, unde cumque illum deleniti exercitationem assumenda nihil!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Postingan Kedua',
        //     'slug' => 'postingan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam?',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti libero officia harum qui voluptatibus suscipit facilis beatae culpa. Aliquid praesentium magni non, unde cumque illum deleniti exercitationem assumenda nihil!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Postingan Ketiga',
        //     'slug' => 'postingan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam?',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti libero officia harum qui voluptatibus suscipit facilis beatae culpa. Aliquid praesentium magni non, unde cumque illum deleniti exercitationem assumenda nihil!',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Postingan Sandhika',
        //     'slug' => 'postingan-sandhika',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, numquam?',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti libero officia harum qui voluptatibus suscipit facilis beatae culpa. Aliquid praesentium magni non, unde cumque illum deleniti exercitationem assumenda nihil!',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
