<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = News::class;

    public function definition()
    {
        return [
            'owner'   => $this->faker -> randomElement([1,2,3,4,5,6]), 
            'headline'=> $this->faker -> sentence(),
            'image'   => $this->faker ->imageUrl(),
            'category'=> $this->faker -> randomElement([1,2,3,4,5,6]), 
        ];
    }
}
