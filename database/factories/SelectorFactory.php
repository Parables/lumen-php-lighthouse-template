<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class SelectorFactory extends Factory
{
    protected $model = Model::class;

    public function definition(): array
    {
        return [
            'for' => $this->faker->randomElement(['Contacts', 'Payment Methods', 'Bank', 'Bank Branches']),
        ];
    }
}
