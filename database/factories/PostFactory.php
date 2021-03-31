<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'   => $this -> faker -> sentence(5),
            'slug'    => Str::slug($this -> faker -> sentence(5)),
            'content' => $this -> faker -> paragraph(10),
            'photo'   => 'http://lorempixel.com/800/400/cats/Faker'
        ];
    }
}
