<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medias;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        Medias::create([
            'category_id' => 2,
            'user_id' => 2,
            'media_title' => 'Vavenhauser is in development mode',
            'media_linker' => 'vavenhauser-is-in-development-mode',
            'media_preview' => 'Lorem ipsum dolor, sit amet consectetur..',
            'media_message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis repellat at sunt repudiandae earum adipisci quos nam consequatur minus pariatur quaerat praesentium illo, fugit mollitia vero, dolor eos possimus.',
            'media_image' => 'img_2.jpg'
        ]);

        Category::create([
            'media_category_name' => 'Organization',
            'media_category_linker' => 'organization'
        ]);

        Category::create([
            'media_category_name' => 'News',
            'media_category_linker' => 'news'
        ]);

        Medias::factory(10)->create();

        // User::create([
        //     'name' => 'Rana Rosihan',
        //     'email' => 'sir.ranarosihan@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Refan Ardiyanah',
        //     'email' => 'sir.refan@gmail.com',
        //     'password' => bcrypt('321')
        // ]);

        // Medias::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'media_title' => 'Using Seeders Box!',
        //     'media_linker' => 'using-seeders-box',
        //     'media_preview' => 'Lorem ipsum dolor, sit amet consectetur..',
        //     'media_message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis repellat at sunt repudiandae earum adipisci quos nam consequatur minus pariatur quaerat praesentium illo, fugit mollitia vero, dolor eos possimus.',
        //     'media_image' => 'img_2.jpg'
        // ]);

        // Medias::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'media_title' => 'Vavenhauser has switched to Laravel 8!',
        //     'media_linker' => 'vavenhauser-switched-to-laravel-8',
        //     'media_preview' => 'Lorem ipsum dolor, sit amet consectetur..',
        //     'media_message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis repellat at sunt repudiandae earum adipisci quos nam consequatur minus pariatur quaerat praesentium illo, fugit mollitia vero, dolor eos possimus.',
        //     'media_image' => 'img_2.jpg'
        // ]);

    }
}
