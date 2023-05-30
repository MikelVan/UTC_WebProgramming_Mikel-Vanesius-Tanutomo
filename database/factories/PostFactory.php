<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

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
    public function definition()
    {
        $categories = Category::all()->pluck('id');
        $images = [
            'images/adeolu-eletu-E7RLgUjjazc-unsplash.jpg',
            'images/austin-distel-PkS3hCZmYts-unsplash.jpg',
            'images/joshua-rawson-harris--B5_t5S_BFo-unsplash.jpg',
            'images/joshua-rawson-harris-ksCk6KkOMsA-unsplash.jpg',
            'images/joshua-rawson-harris-LX0pplSjE2g-unsplash.jpg',
            'images/joshua-rawson-harris-M5VqCeKC3vk-unsplash.jpg',
            'images/joshua-rawson-harris-TGDfpvSD8Lc-unsplash.jpg',
            'images/joshua-rawson-harris-wCgy-qHtZtM-unsplash.jpg',
            'images/kenny-eliason-Pfa7Soh0euw-unsplash.jpg',
            'images/ozan-safak-SPS6wfD6H4k-unsplash.jpg',
        ];

        return [
            'title' => fake()->sentence(mt_rand(4, 15)),
            'description' => fake()->sentence(mt_rand(10, 25)),
            'author' => fake()->name(),
            'thumbnail' => fake()->randomElement($images),
            'category_id' => fake()->randomElement($categories),
            'content' => fake()->paragraphs(mt_rand(2, 6), true)
        ];
    }
}
