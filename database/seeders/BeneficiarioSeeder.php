<?php

namespace Database\Seeders;

use App\Models\Beneficiario;
use Illuminate\Database\Seeder;

class BeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Beneficiario::create([
            'nome' => 'Josias Salvador',
            'idade' => 30,
            'plano' => 1,
            'grupo' => 1,
            'titular' => 1
       ]);

       \App\Models\Beneficiario::create([
        'nome' => 'Marina Salvador dos Santos',
        'idade' => 32,
        'plano' => 1,
        'grupo' => 1,
        'titular' => 0
   ]);
    }
}
