<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => Str::title(($this->faker->words(mt_rand(2, 8), true))),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->paragraph(),
            // "body" => "<p>" . implode("</p><p>", $this->faker->paragraphs(random_int(10, 20))) . "</p>",
            // kode di atas akan menggabungkna array paragraphs dengan pemisah "</p><p>"
            "body" => collect($this->faker->paragraphs(random_int(10, 20)))
                ->map(fn ($paragraph) => "<p> $paragraph </p>")
                ->implode(""),
            // Fungsi collect digunakan untuk mengubah array biasa menjadi objek koleksi yang memiliki berbagai metode bantuan untuk memanipulasi data.
            // Metode map ada pada collect
            "category_id" => random_int(1, 3),
            "user_id" => random_int(1, 5),
        ];
        // mt_rand dan random_int itu fungsinya sama, tetapi kalau pakai random_int lebih aman dan sedikit lebih lemot dibanding mt_rand
    }
}
