<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Plan::create([
            'codigo_id' => '1',
            'registro' => 'reg1',
            'nome' => 'Bitix Customer Plano 1'
        ]);

        \App\Models\Plan::create([
            'codigo_id' => '2',
            'registro' => 'reg2',
            'nome' => 'Bitix Customer Plano 2'
        ]);

        \App\Models\Plan::create([
            'codigo_id' => '3',
            'registro' => 'reg3',
            'nome' => 'Bitix Customer Plano 3'
        ]);

        \App\Models\Plan::create([
            'codigo_id' => '4',
            'registro' => 'reg4',
            'nome' => 'Bitix Customer Plano 4'
        ]);

        \App\Models\Plan::create([
            'codigo_id' => '5',
            'registro' => 'reg5',
            'nome' => 'Bitix Customer Plano 5'
        ]);

        \App\Models\Plan::create([
            'codigo_id' => '6',
            'registro' => 'reg6',
            'nome' => 'Bitix Customer Plano 6'
        ]);
    }
}
