<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->text(100),
            'slug' => $this->faker->numberBetween(1, 100),
            'img' => $this->faker->text,
            'created_at'=>$this->faker->dateTimeBetween('-1 year',)

        ];
    }
}
