<?php

namespace Database\Factories;

use App\Models\UserBackup;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserBackupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserBackup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "position_id" => function() {
                return UserBackup::factory(Position::class)->create()->id;
            },
            "date_employment" => $this->faker->date(),
            "phone_number" => $this->faker->phoneNumber(),
            "email" => $this->faker->safeEmail(),
            "salary" => $this->faker->randomFloat(),
            "email_verified_at" => $this->faker->date(),
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            "remember_token" =>  Str::random(100),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
