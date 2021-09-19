<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            //
            'nom' => $this->faker->lastName,
            'prenom'  => $this->faker->firstName,
            'date_de_naissance' =>$this->faker->dateTimeBetween("1980-01-01", "2001-12-30"),
            'lieu_de_naissance' => "$pays, $ville",
            'nationalite' => $this->faker->country,
            'ville' => $ville,
            'pays' => $pays,
            'adresse' => $this->faker->address,
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'sexe' => array_rand(['F', 'H'], 1),
            'piece_identite' => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE"]),
            'numero_piece_identite' => $this->faker->creditCardNumber,
        ];
    }
}
