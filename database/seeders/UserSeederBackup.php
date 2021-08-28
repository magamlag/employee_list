<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;

class UserSeederBackup extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("students")->insert([
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "phone_number" => $this->faker->phoneNumber,

        ]);

    }
}
