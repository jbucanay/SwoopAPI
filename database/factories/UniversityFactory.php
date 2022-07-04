<?php



namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
require_once 'vendor/autoload.php';
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name'=> $this->faker->lastName,
            'address'=> $this-> faker->streetAddress,
            'city'=> $this->faker->city,
            'state'=> $this->faker->state
        ];
    }
}
