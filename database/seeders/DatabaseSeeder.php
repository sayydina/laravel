<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

    //    user::create([
    //     'name' => 'Sayyidina M Malik',
    //     'email' => 'sayyidinam@gmail.com',
    //     'password' => bcrypt('12345')
    //    ]);

    //    user::create([
    //     'name' => ' Maha Dewa Maulana Muhammad',
    //     'email' => 'maha@gmail.com',
    //     'password' => bcrypt('12345')
    //    ]);

       User::factory(3)->create();

       Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
       ]);

       Category::create([
        'name' => 'Web Desain',
        'slug' => 'web-desain'
       ]);

       Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
       ]);

       Post::factory(20)->create();

    //    Post::create([
    //     'title' => 'Judul Pertama',
    //     'slug' => 'judul-pertama',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit similique nisi a quidem itaque illo nam quasi, dignissimos, odit voluptates voluptas. Voluptate vitae eum ullam totam aperiam quaerat dolor hic nisi dolore quod< ducimus iusto soluta voluptates fugit delectus ab, eius, quas veniam id impedit laborum quam quia numquam! Esse, labore harum sit est quisquam officiis excepturi minima commodi nesciunt. Ipsa nobis aut amet enim debitis laudantium saepe consequatur mollitia ex ad doloribus incidunt, officia nisi vero nulla quisquam quibusdam quas quod iusto suscipit ullam ut facere labore. Quod possimus, assumenda necessitatibus sit officiis harum. Eveniet consequuntur debitis in eligendi minima accusamus minus quis asperiores perferendis consectetur magnam tempora molestiae modi nesciunt, quo quisquam odit aperiam praesentium natus libero velit mollitia autem! Corrupti laborum in maxime aspernatur. Nulla tempora ut quo impedit asperiores aliquid maiores dignissimos dolore ad explicabo.',
    //     'category_id' => 1,
    //     'user_id' => 1
    //    ]);

    //    Post::create([
    //     'title' => 'Judul Ke Dua',
    //     'slug' => 'judul-ke-dua',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit similique nisi a quidem itaque illo nam quasi, dignissimos, odit voluptates voluptas. Voluptate vitae eum ullam totam aperiam quaerat dolor hic nisi dolore quod< ducimus iusto soluta voluptates fugit delectus ab, eius, quas veniam id impedit laborum quam quia numquam! Esse, labore harum sit est quisquam officiis excepturi minima commodi nesciunt. Ipsa nobis aut amet enim debitis laudantium saepe consequatur mollitia ex ad doloribus incidunt, officia nisi vero nulla quisquam quibusdam quas quod iusto suscipit ullam ut facere labore. Quod possimus, assumenda necessitatibus sit officiis harum. Eveniet consequuntur debitis in eligendi minima accusamus minus quis asperiores perferendis consectetur magnam tempora molestiae modi nesciunt, quo quisquam odit aperiam praesentium natus libero velit mollitia autem! Corrupti laborum in maxime aspernatur. Nulla tempora ut quo impedit asperiores aliquid maiores dignissimos dolore ad explicabo.',
    //     'category_id' => 1,
    //     'user_id' => 1
    //    ]);

    //    Post::create([
    //     'title' => 'Judul Ke Tiga',
    //     'slug' => 'judul-ke-tiga',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, corrupti veritatis atque dolorem quibusdam repellat eligendi eos ratione pariatur velit similique nisi a quidem itaque illo nam quasi, dignissimos, odit voluptates voluptas. Voluptate vitae eum ullam totam aperiam quaerat dolor hic nisi dolore quod< ducimus iusto soluta voluptates fugit delectus ab, eius, quas veniam id impedit laborum quam quia numquam! Esse, labore harum sit est quisquam officiis excepturi minima commodi nesciunt. Ipsa nobis aut amet enim debitis laudantium saepe consequatur mollitia ex ad doloribus incidunt, officia nisi vero nulla quisquam quibusdam quas quod iusto suscipit ullam ut facere labore. Quod possimus, assumenda necessitatibus sit officiis harum. Eveniet consequuntur debitis in eligendi minima accusamus minus quis asperiores perferendis consectetur magnam tempora molestiae modi nesciunt, quo quisquam odit aperiam praesentium natus libero velit mollitia autem! Corrupti laborum in maxime aspernatur. Nulla tempora ut quo impedit asperiores aliquid maiores dignissimos dolore ad explicabo.',
    //     'category_id' => 2,
    //     'user_id' => 2
    //    ]);
    }
}
