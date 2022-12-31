<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Sixtus Agbo',
            'username' => 'sixtusagbo',
            'email' => 'mail.mirolic@gmail.com',
            'email_verified_at' => null
        ]);

        \App\Models\User::factory(12)->create();

        $this->call([
            PaymentWalletSeeder::class,
            PlanSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
