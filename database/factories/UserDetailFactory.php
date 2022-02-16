<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Country;

class UserDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'citizenship_country_id' => Country::factory(),
            'first_name' => $this->faker->name(),
            'last_name' =>$this->faker->name(),
            'phone_number' => $this->faker->name()
        ];
    }
}
