<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Stefanus Loveniko",
        "profession" => "Professional Software Engineer"
    ]);
});
Route::get('/blog', [PostController::class, "index"]);

// penggunaan Controller seperti dibawah ini berguna untuk membantu mengatur view, agar dapat menjadi kode yang lebih rapi
// terdapat juga penggunaan model, seperti pada file Post.php, berguna untuk mengatur data
// Jadi sebisa mungkin mengurangi kode2 yang ada di routes

// mencari slug pada variabel post
Route::get('/blog/{post:slug}', [PostController::class, "show"]);

// Dibawah merupakan cara yang lama
// {slug} berfungsi sebagai dynamic value di URL, kemudian {slug} akan dipassing ke 
//callback function $slug}, bahkan nilai dari {slug} bisa diubah-ubah, contohnya menjadi {sug}, 
//dengan catatan penulisannya tidak bisa kosong -> seperti {}

// PERTANYAAN Kenapa kalau nulisnya /blog/categories-list tidak kebaca
Route::get('/categories-list', function () {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get('/blog/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        "title" => "Post By Category: $category->name",
        "active" => "blog",
        "posts" => $category->posts->load('category', 'author')
    ]);
});

//kalau memakainya {user} saja nanti yang dicari akan id-nya
// Disini user sama saja author, cuma diganti saja
// Bagian author pada author:username itu mengarah pada $author
Route::get('/blog/authors/{author:username}', function (User $author) {
    return view('blog', [
        "title" => "Post By Author : $author->name",
        "active" => "blog",
        "posts" => $author->posts->load('category', 'author')
        // Di atas namanya Lazy Eager Loading, agar informasi dimuat bersamaan dalam satu query. Memakai Lazy Eager Loading karena ini merupakan route model binding. 
    ]);
});
