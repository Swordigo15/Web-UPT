<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Muhammad Annys',
            'username' => 'swordigo',
            'email'=> 'annys.abubakar@gmail.com',
            'password'=> bcrypt('12345')
        ]);
        
        // User::create([
        //     'name' => 'Muhammad Nasser',
        //     'email'=> 'nasser@gmail.com',
        //     'password'=> bcrypt('23456')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
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
        //     'title'  => 'Judul Satu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug'   => 'judul-satu',
        //     // 'author' => 'Muhammad Annys',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim culpa cumque rerum, iusto ullam, in labore accusantium animi necessitatibus eos, ipsam impedit! Accusantium illum corrupti nesciunt pariatur dolore debitis eveniet!</p><p>Nesciunt suscipit eum optio accusantium tenetur, voluptas perferendis veniam, recusandae itaque temporibus molestiae rerum ipsum tempore officiis sunt minus? Recusandae atque consequuntur officiis reprehenderit deserunt ab illum corporis tenetur qui!</p>'
        // ]);
        // Post::create([
        //     'title'  => 'Judul Dua',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug'   => 'judul-dua',
        //     // 'author' => 'Addin',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed.',
        //     'body'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed. Temporibus vero quo id aperiam dolor. Dolorum iusto incidunt culpa ipsa!</p><p>Asperiores dolor iste quas temporibus deleniti et eligendi voluptates quos cum debitis nam sed ab ipsa dignissimos obcaecati excepturi corporis necessitatibus, ducimus voluptatum pariatur facilis qui totam laborum. Ut, non!</p>'
        // ]);
        // Post::create([
        //     'title'  => 'Judul Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug'   => 'judul-tiga',
        //     // 'author' => 'Muhammad Faza',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed.',
        //     'body'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed. Temporibus vero quo id aperiam dolor. Dolorum iusto incidunt culpa ipsa!</p><p>Asperiores dolor iste quas temporibus deleniti et eligendi voluptates quos cum debitis nam sed ab ipsa dignissimos obcaecati excepturi corporis necessitatibus, ducimus voluptatum pariatur facilis qui totam laborum. Ut, non!</p>'
        // ]);
        // Post::create([
        //     'title'  => 'Judul Empat',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug'   => 'judul-empat',
        //     // 'author' => 'Muhammad Nasser',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed.',
        //     'body'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veritatis mollitia consequuntur velit tempora nulla voluptas fuga fugit sed. Temporibus vero quo id aperiam dolor. Dolorum iusto incidunt culpa ipsa!</p><p>Asperiores dolor iste quas temporibus deleniti et eligendi voluptates quos cum debitis nam sed ab ipsa dignissimos obcaecati excepturi corporis necessitatibus, ducimus voluptatum pariatur facilis qui totam laborum. Ut, non!</p>'
        // ]);
    }

}
