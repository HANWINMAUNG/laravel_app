<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
           'category_id'=> $this->faker->numberBetween(1,20),
           'name'=>$this->faker->catchPhrase(),
           'description'=>$this->faker->realText(200,2)
        ];
    }
}
