<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>fake()->name(),
            "login"=>fake()->unique()->firstName(),
            "pwd"=>Str::random(12),
            "email"=>fake()->email(),
            "etat"=>Arr::random([true, false]),
            "tel"=>fake()->e164PhoneNumber(),
            "age"=>fake()->numberBetween(21, 120),
            "sexe"=>fake()->randomElement(["m", "f"]),
            "status"=>fake()->randomElement(["e", "c"]),
            "id_region"=>fake()->numberBetween(1, 20),
        ];
    }
}
