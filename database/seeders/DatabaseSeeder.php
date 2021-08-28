<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\UserBackup::factory(10)->create();
        $this->call('UserSeederBackup');

        $this->command->info('UserBackup table seeded!');
    }
}
