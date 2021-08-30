<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


class UserBackupSeeder extends Seeder
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
        DB::table("user_backups")->insert([
            "name" => $this->faker->name(),
            "position_id" => $this->faker->randomDigit(20),
            "date_employment" => $this->faker->date(),
            "phone_number" => $this->faker->phoneNumber(),
            "email" => $this->faker->safeEmail,
            "salary" => $this->faker->randomFloat(),
            "email_verified_at" => $this->faker->date,
            "password" => $this->faker->password,
            "remember_token" =>  $this->faker->sha1,

        ]);

    }
}
