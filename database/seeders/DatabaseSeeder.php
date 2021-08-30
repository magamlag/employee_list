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
        $this->call(PositionSeeder::class);
        $this->call(UserBackupSeeder::class);


        $this->command->info('Database table seeded!');
    }
}
