<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        User::create([
            'name' => 'Rian Adriansyah',
            'email' => 'rianjh2@gmail.com',
            'username' => 'rianadriansyah',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Zayn Malik',
        //     'email' => 'zaynmalik@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::Create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid magni animi ad quia, quas consequuntur dolor soluta quod! Voluptates autem voluptas nostrum quo dolorum. Mollitia consequatur sapiente exercitationem repudiandae ut.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minus tenetur perspiciatis laudantium voluptate et dolor magni amet repellendus doloremque veritatis ipsum pariatur a earum iure quas sequi eligendi dolorum, mollitia quae totam exercitationem architecto nobis assumenda? Minus illum quia illo expedita, consequuntur adipisci!</p><p> Vero omnis aliquam eum alias mollitia tempora ipsa natus, ducimus autem voluptatibus temporibus illo, expedita quas in provident voluptas reprehenderit asperiores commodi inventore? Recusandae, quos! Reiciendis, totam, amet aliquid, ducimus aut corporis vero iste eligendi explicabo consectetur at et maiores quaerat non veritatis odit.</p><p>Modi veniam aliquid ex pariatur quos totam sequi dolor aut reiciendis libero. Adipisci, velit illum! Minima ut sint possimus rem, assumenda libero perspiciatis laboriosam omnis sunt blanditiis temporibus accusamus natus voluptatum veritatis molestiae? Blanditiis magni perferendis, saepe est facilis consectetur ea, molestias reiciendis cupiditate quas nemo harum sequi. Esse accusamus a illum, quisquam voluptates eaque quidem est soluta repudiandae excepturi facere saepe!</p>
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::Create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid magni animi ad quia.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minus tenetur perspiciatis laudantium voluptate et dolor magni amet repellendus doloremque veritatis ipsum pariatur a earum iure quas sequi eligendi dolorum, mollitia quae totam exercitationem architecto nobis assumenda? Minus illum quia illo expedita, consequuntur adipisci!</p><p> Vero omnis aliquam eum alias mollitia tempora ipsa natus, ducimus autem voluptatibus temporibus illo, expedita quas in provident voluptas reprehenderit asperiores commodi inventore? Recusandae, quos! Reiciendis.</p><p>consequuntur adipisci!</p><p> Vero omnis aliquam eum alias mollitia tempora ipsa natus, ducimus autem voluptatibus temporibus illo, expedita quas in provident voluptas reprehenderit asperiores commodi inventore? Recusandae, quos! Reiciendis.</p>
        //     ',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::Create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid magni animi ad quia, quas consequuntur dolor soluta quod! Voluptates.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minus tenetur perspiciatis laudantium voluptate et dolor magni amet repellendus doloremque veritatis ipsum pariatur a earum iure quas sequi eligendi dolorum, mollitia quae totam exercitationem architecto nobis assumenda? Minus illum quia illo expedita, consequuntur adipisci!</p><p> Vero omnis aliquam eum alias mollitia tempora ipsa natus, ducimus autem voluptatibus temporibus illo, expedita quas in provident voluptas reprehenderit asperiores commodi inventore? Recusandae, quos! Reiciendis.</p>
        //     ',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    
    }
}
