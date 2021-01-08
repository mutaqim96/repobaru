<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Isi apa yang nak didummy kan.
            'title' => $this->faker->sentence(),
            'trainer'=> $this->faker->name,
            'description'=>$this->faker->text
        ];
    }
}
