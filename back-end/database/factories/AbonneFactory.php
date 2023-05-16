<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class AbonneFactory extends Factory
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
            "prenom"=>fake()->unique()->firstName(),
            "email"=>fake()->email(),
            "telephone"=>fake()->e164PhoneNumber(),
            "code_postal"=>fake()->e164PhoneNumber(),
            "age"=>fake()->numberBetween(21, 120),
            "sexe"=>fake()->randomElement(["m", "f"]),
            "ville"=>fake()->randomElement(["e", "c"]),
            "proffession"=>fake()->randomElement(["e", "c"]),
            "pays"=>fake()->randomElement(["e", "c"]),
            "rue"=>fake()->randomElement(["e", "c"]),
            "id_mot"=>fake()->numberBetween(1, 20),
        ];
    }
}
