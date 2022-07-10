<?php

namespace Database\Seeders;

use App\Models\Beneficiario;
use Database\Factories\BeneficiarioSeeder;
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
        $this->call([
            PlanSeeder::class,
            PriceSeeder::class,
            BeneficiarioSeeder::class
        ]);
    }
}
