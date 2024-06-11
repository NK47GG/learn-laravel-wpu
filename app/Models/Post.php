<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; //untuk kasih tau field mana saja yang boleh diisi, ini metode pertama
    protected $guarded = ['id']; //Ini yang ga boleh diisi, cara kedua, lebih efektif
    protected $with = ["author", "category"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // sebenarnya dibawah user(), tetapi diganti menjadi author() alias "user_id"
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

// Post::find(3) , ntar cari id 3
// Post ::find(3)->update(['title' => 'kemren']) , ntar mengganti title pada id 3
// Post::where("title", "Post with Fillable")->update(['excerpt' => "excerpt berubah"]) , ntar mengubah isi excerpt dengan judul yang dicari
