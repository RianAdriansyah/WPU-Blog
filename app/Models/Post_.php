<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
 private static $blog_posts =[
    [
        "title" => "Post Pertama",
        "slug" => "post-pertama",
        "author" => "Rian Adriansyah",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt unde sapiente voluptatibus distinctio necessitatibus harum? Ducimus, facere suscipit modi quo ad dolorum eaque vitae dolor quisquam ea harum ratione perferendis magni, id totam possimus, cupiditate repellat blanditiis cum. Quod quae quidem consequuntur voluptates totam impedit corrupti id similique inventore tempora?"
    ],
    [
        "title" => "Post Kedua",
        "author" => "Zayn Malik",
        "slug" => "post-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam, harum architecto accusantium vitae mollitia necessitatibus maiores, beatae ad aperiam praesentium eius, quam fugit dolorem quidem quibusdam cumque aspernatur non. Veritatis hic nesciunt ullam fuga repudiandae consequuntur error, a fugit itaque minus odio dolorum omnis doloremque quam corporis nulla quo sint pariatur saepe! Recusandae consequuntur quod accusantium accusamus non ex magnam, nisi asperiores inventore earum ipsum adipisci beatae architecto aliquid."
    ]
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
    //     $post = [];
    // foreach($posts as $p){
    //     if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
    }
}
