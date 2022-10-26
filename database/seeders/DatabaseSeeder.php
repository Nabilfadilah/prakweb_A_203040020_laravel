<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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



        // User::create([
        //     'name' => 'Mohammad Nabil Fadilah',
        //     'email' => 'mohammadFaadilah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sopari Tolani',
        //     'email' => 'TolSopari12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // pertama
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque. Eveniet eligendi dolores molestiae 
        //     dignissimos doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, eligendi quod earum 
        //     liquid temporibus sapiente voluptatum sit voluptates adipisci ad sed corporis doloribus! Delectus ex placeat 
        //     fuga tenetur qui quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nesciunt facilis 
        //     dolor porro modi eaque itaque, magni deserunt nisi impedit quis? Nobis nam culpa magni cum unde suscipit ex repudiandae.
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam necessitatibus animi, mollitia aspernatur quae rerum,
        //     labore atque nam iure sint nobis ad excepturi id quasi quidem minima! Officiis, mollitia alias.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // // kedua
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque. Eveniet eligendi dolores molestiae 
        //     dignissimos doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, eligendi quod earum 
        //     liquid temporibus sapiente voluptatum sit voluptates adipisci ad sed corporis doloribus! Delectus ex placeat 
        //     fuga tenetur qui quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nesciunt facilis 
        //     dolor porro modi eaque itaque, magni deserunt nisi impedit quis? Nobis nam culpa magni cum unde suscipit ex repudiandae.
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam necessitatibus animi, mollitia aspernatur quae rerum,
        //     labore atque nam iure sint nobis ad excepturi id quasi quidem minima! Officiis, mollitia alias.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // // ketiga 
        // Post::create([
        //     'title' => 'Judul Ke-tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque. Eveniet eligendi dolores molestiae 
        //     dignissimos doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, eligendi quod earum 
        //     liquid temporibus sapiente voluptatum sit voluptates adipisci ad sed corporis doloribus! Delectus ex placeat 
        //     fuga tenetur qui quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nesciunt facilis 
        //     dolor porro modi eaque itaque, magni deserunt nisi impedit quis? Nobis nam culpa magni cum unde suscipit ex repudiandae.
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam necessitatibus animi, mollitia aspernatur quae rerum,
        //     labore atque nam iure sint nobis ad excepturi id quasi quidem minima! Officiis, mollitia alias.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // // keempat
        // Post::create([
        //     'title' => 'Judul Ke-Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem illo quisquam ratione placeat, in, 
        //     sed natus et magnam recusandae maxime praesentium sint asperiores cumque. Eveniet eligendi dolores molestiae 
        //     dignissimos doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, eligendi quod earum 
        //     liquid temporibus sapiente voluptatum sit voluptates adipisci ad sed corporis doloribus! Delectus ex placeat 
        //     fuga tenetur qui quibusdam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nesciunt facilis 
        //     dolor porro modi eaque itaque, magni deserunt nisi impedit quis? Nobis nam culpa magni cum unde suscipit ex repudiandae.
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam necessitatibus animi, mollitia aspernatur quae rerum,
        //     labore atque nam iure sint nobis ad excepturi id quasi quidem minima! Officiis, mollitia alias.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
