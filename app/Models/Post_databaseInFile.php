<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First article",
            "slug" => "first-article",
            "author" => "Stefanus Loveniko",
            "body" => "    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro cumque veritatis consequatur impedit. Perferendis, quo. Esse pariatur cumque dignissimos reiciendis perferendis ea harum, alias beatae, ut consectetur dolorum voluptate sequi soluta voluptatem voluptas dolores nemo error. Delectus doloremque tempora repellendus magnam rerum possimus deleniti unde a ad minima corrupti incidunt sequi, maxime alias consequuntur consequatur nostrum sed porro perferendis, soluta ex nesciunt quisquam? Quam nisi molestiae iure dignissimos, quo facere earum dolores explicabo voluptatem recusandae aliquid fugit fuga, dolore porro!
        "
        ],
        [
            "title" => "Second article",
            "slug" => "second-article",
            "author" => "Gabriella Jovanka",
            "body" => "    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro cumque veritatis consequatur impedit. Perferendis, quo. Esse pariatur cumque dignissimos reiciendis perferendis ea harum, alias beatae, ut consectetur dolorum voluptate sequi soluta voluptatem voluptas dolores nemo error. Delectus doloremque tempora repellendus magnam rerum possimus deleniti.
        "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        // karena properti static perlu keyword self
        // kalau properti biasa $this-> blog_post;
    }
    // Static dipakai agar tidak perlu membuat objek terus menerus, jadi bisa langsung dipakai;
    // Kalau tidak memakai static, ketika membuat objek kedua akan membuat angkanya tereset lagi. Tp kalo pake static angkanya tetep, berlaku jg untuk func

    public static function find($slug)
    {
        $posts = static::all();
        // $posts = self::$blog_posts;
        //Jadi nanti dari URl {slug} akan dikirim ke $slug yang dipakai logikanya untuk mencocokan 
        //slug dari URL dan slug yang dari $blog_content
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($slug === $p["slug"]) {
        //         $post = $p;
        //     };
        // };
        // Sebenarnua fungsi dari membuat foreach dan $new_post adalah untuk mengambil salah satu data
        // yang berdasarkan pada logika slug
        return $posts->firstWhere('slug', $slug);
    }
}
