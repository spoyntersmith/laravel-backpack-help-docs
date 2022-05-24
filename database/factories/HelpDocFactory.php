<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Database\Factories;

use Spoyntersmith\LaravelBackpackHelpDocs\Models\HelpDoc;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpDocFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HelpDoc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'plain_content' => $this->faker->paragraph,
        ];
    }
}
