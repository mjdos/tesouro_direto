<?php

namespace Database\Seeders;

use App\Models\Titulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Titulo::create([
            'idExterno' => '1',
            'sigla' => 'TS26',
            'nome' => 'Tesouro Selic 2026',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 2.5,
            'valorNominal' => 2400.00,
            'aliquotaIR' => 11.0,
            'taxa_b3' => 1.2,
            'isentoIOF' => 1,
        ]);
        Titulo::create([
            'idExterno' => '2',
            'sigla' => 'TS29',
            'nome' => 'Tesouro Selic 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 5.5,
            'valorNominal' => 3000.00,
            'aliquotaIR' => 14.0,
            'taxa_b3' => 2.3,
            'isentoIOF' => 3,
        ]);

        Titulo::create([
            'idExterno' => '3',
            'sigla' => 'TP26',
            'nome' => 'Tesouro Pré-Fixado 2026',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 3.5,
            'valorNominal' => 1800.00,
            'aliquotaIR' => 18.0,
            'taxa_b3' => 3.2,
            'isentoIOF' => 2,
        ]);

        Titulo::create([
            'idExterno' => '4',
            'sigla' => 'TP26',
            'nome' => 'Tesouro Pré-Fixado 2026',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 5.9,
            'valorNominal' => 3200.00,
            'aliquotaIR' => 7.5,
            'taxa_b3' => 2.6,
            'isentoIOF' => 5,
        ]);

        Titulo::create([
            'idExterno' => '5',
            'sigla' => 'TP29',
            'nome' => 'Tesouro Pré-Fixado 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 2.2,
            'valorNominal' => 1900.00,
            'aliquotaIR' => 1.4,
            'taxa_b3' => 1.6,
            'isentoIOF' => 3,
        ]);

        Titulo::create([
            'idExterno' => '5',
            'sigla' => 'TP33',
            'nome' => 'Tesouro Pré-Fixado 2033',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 8.4,
            'valorNominal' => 2800.00,
            'aliquotaIR' => 2.9,
            'taxa_b3' => 3.8,
            'isentoIOF' => 7,
        ]);

        Titulo::create([
            'idExterno' => '6',
            'sigla' => 'TI29',
            'nome' => 'Tesouro IPCA+ 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 1.9,
            'valorNominal' => 5000.00,
            'aliquotaIR' => 15.0,
            'taxa_b3' => 1.1,
            'isentoIOF' => 3,
        ]);

        Titulo::create([
            'idExterno' => '6',
            'sigla' => 'TI29',
            'nome' => 'Tesouro IPCA+ 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 6,
            'valorNominal' => 3600.00,
            'aliquotaIR' => 9.5,
            'taxa_b3' => 1.9,
            'isentoIOF' => 7,
        ]);

        Titulo::create([
            'idExterno' => '7',
            'sigla' => 'TI32',
            'nome' => 'Tesouro IPCA+ 2032',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 3.7,
            'valorNominal' => 4100.00,
            'aliquotaIR' => 12.0,
            'taxa_b3' => 1.4,
            'isentoIOF' => 1,
        ]);

        Titulo::create([
            'idExterno' => '8',
            'sigla' => 'TE26',
            'nome' => 'Tesouro Educa+ 2026',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 9.2,
            'valorNominal' => 2200.00,
            'aliquotaIR' => 17.0,
            'taxa_b3' => 2.8,
            'isentoIOF' => 2,
        ]);

        Titulo::create([
            'idExterno' => '9',
            'sigla' => 'TE29',
            'nome' => 'Tesouro Educa+ 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 8.5,
            'valorNominal' => 3500.00,
            'aliquotaIR' => 19.0,
            'taxa_b3' => 3.5,
            'isentoIOF' => 4,
        ]);
    }
}
