<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "All Blog",
            "active" => "blog",
            // "posts" => Post::all(), //mengambil data dengan urutan id
            // artinya mengambil dari model Post yang methodnya all
            // "posts" => Post::with(["author", "category"])->latest()->get() //mengambil data dengan urutan postingan terbaru
            // Diatas, ada with(["relation1", "relation2"]), artinya kita mengambil data dari post sekaligus mengambil data untuk author dan category. Ini agar query yang diambil hanya 3 kali saja : post, author, category. Ini namanya Eager Loading. Kalau misal tidak pakai eager (tanpa with), namanya lazy loading. Nanti akan menyebabkan query yang terpanggil sangat banyak dan looping. Kita bisa cek pakai clockwork extension saat inspect element.

            "posts" => Post::latest()->get()
            //disini with akan dipindahkan di Post Model dengan tulisan "protected $with = ["author", "category"];

        ]);
    }

    // variabel yang menerima model ($post) harus sama dengan variabel yang dituliskan di web.php, kalau misalnya berbeda nanti akan tidak terbaca
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
