<?php

namespace Database\Factories;

use App\Models\Medias;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 2),
            'media_title' => $this->faker->sentence(mt_rand(4, 8)),
            'media_linker' => $this->faker->slug(mt_rand(4, 6)),
            'media_preview' => $this->faker->sentence(mt_rand(16, 24)),
            // 'media_message' => '<p> ' . implode('<p></p>',$this->faker->paragraphs(mt_rand(16, 24))) . '</p>'
            'media_message' => collect($this->faker->paragraphs(mt_rand(16, 24)))->map(fn($p) => '<p>'. $p .'</p>')->implode('')
        ];
    }
}
