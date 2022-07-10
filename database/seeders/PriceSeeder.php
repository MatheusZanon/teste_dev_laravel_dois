<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Price::create([
            'codigo' => 1,
            'minimo_vidas' => 1,
            'faixa1' => 10.00,
            'faixa2' => 12,
            'faixa3' => 15.00
        ]);

        \App\Models\Price::create([
            'codigo' => 1,
            'minimo_vidas' => 4,
            'faixa1' => 9,
            'faixa2' => 11.00,
            'faixa3' => 14.00
        ]);

        \App\Models\Price::create([
            'codigo' => 2,
            'minimo_vidas' => 1,
            'faixa1' => 20.00,
            'faixa2' => 30,
            'faixa3' => 40.00
        ]);

        \App\Models\Price::create([
            'codigo' => 3,
            'minimo_vidas' => 1,
            'faixa1' => 30,
            'faixa2' => 40.00,
            'faixa3' => 50
        ]);

        \App\Models\Price::create([
            'codigo' => 4,
            'minimo_vidas' => 1,
            'faixa1' => 40.00,
            'faixa2' => 50.00,
            'faixa3' => 60
        ]);

        \App\Models\Price::create([
            'codigo' => 5,
            'minimo_vidas' => 1,
            'faixa1' => 50,
            'faixa2' => 60.00,
            'faixa3' => 70.00
        ]);

        \App\Models\Price::create([
            'codigo' => 6,
            'minimo_vidas' => 1,
            'faixa1' => 60,
            'faixa2' => 70,
            'faixa3' => 80
        ]);

        \App\Models\Price::create([
            'codigo' => 6,
            'minimo_vidas' => 2,
            'faixa1' => 55.00,
            'faixa2' => 65.00,
            'faixa3' => 75.00
        ]);
    }
}
