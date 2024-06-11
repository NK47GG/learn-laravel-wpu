<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
// Jadi ketika mau membentuk instance untuk user, kita dapat melakukannya dengan langkah:
// 1. php artisan tinker
// 2. $user = new App\Models\User
// 3. $user = new User (kalau sampai sini belum bisa bisa coba => use App\Models\User, baru mencoba ulang)
// 4. $user->name = ""
// 5. $user->email = ""
// 6. $user->password= bcrypt("")
// 7. $user->save()

// Untuk menunjukan semuanya bisa $user->all()

// menambahg tabel = php artisan migrate
// menghapus tabel = php artisan migrate:rollback
// menghapus dan menambah = php artisan migarte:fresh //dengab catatan kalau menghapus nanti data yang ada di dalem tabel bakal hilang\

// Bisa juga memakai cara lain, contoh:
// Pertama harus melakukan protected $fillable = [] di Post.php (model) di dalam lalu diisi seperti dibawah
// Post::create([
    //"title" => "Judul keempat", 
    //"excerpt" => "text untuk excerpt", 
    //"body" => "text untuk body" 
// ])
