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
            'rentabilidadeAnual' => 0.045,
            'valorNominal' => 14141.55,
            'aliquotaIR' => 11.0,
            'taxa_b3' => 0.20,
            'isentoIOF' => 1,
            'hora' => 0.26,
            'hora_status' => 'P',
            'dia' => 3.76,
            'dia_status' => 'P',
            'semana' => 2.40,
            'semana_status'=> 'P',
        ]);
        Titulo::create([
            'idExterno' => '2',
            'sigla' => 'TS29',
            'nome' => 'Tesouro Selic 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 5.5,
            'valorNominal' => 14031.56,
            'aliquotaIR' => 22.50,
            'taxa_b3' => 2.3,
            'isentoIOF' => 3,
            'hora_status' =>  'N',
            'dia_status' =>  'N',
            'semana_status' =>  'N',
            'hora' => 0.13,
            'dia' => 5.16,
            'semana' => 1.61,

        ]);

        Titulo::create([
            'idExterno' => '3',
            'sigla' => 'TP26',
            'nome' => 'Tesouro Pré-Fixado 2026',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 3.5,
            'valorNominal' => 820.68,
            'aliquotaIR' => 9.93,
            'taxa_b3' => 0.20,
            'isentoIOF' => 2,
            'hora_status' => 'P',
            'dia_status' => 'P',
            'semana_status' => 'N',
            'hora' => 0.01,
            'dia' => 1.84,
            'semana' => 2.13,
        ]);

        Titulo::create([
            'idExterno' => '4',
            'sigla' => 'TP29',
            'nome' => 'Tesouro Pré-Fixado 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 10.52,
            'valorNominal' => 602.61,
            'aliquotaIR' => 7.5,
            'taxa_b3' => 0.26,
            'isentoIOF' => 5,
            'hora_status' => 'N',
            'dia_status' => 'N',
            'semana_status' => 'P',
            'hora' => 0.09,
            'dia' => 2.09,
            'semana' => 4.02,
        ]);
        
        Titulo::create([
            'idExterno' => '5',
            'sigla' => 'TP33',
            'nome' => 'Tesouro Pré-Fixado 2033',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 10.77,
            'valorNominal' => 1000.00,
            'aliquotaIR' => 2.9,
            'taxa_b3' => 3.8,
            'isentoIOF' => 7,
            'hora_status' => 'P',
            'dia_status' => 'N',
            'semana_status' => 'N',
            'hora' => 0.15,
            'dia' => 6.81,
            'semana' => 4.69,
        ]);
        
        Titulo::create([
            'idExterno' => '6',
            'sigla' => 'TI29',
            'nome' => 'Tesouro IPCA+ 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 31.26,
            'valorNominal' => 3126.92,
            'aliquotaIR' => 15.0,
            'taxa_b3' => 1.1,
            'isentoIOF' => 3,
            'hora_status' => 'N',
            'dia_status' => 'P',
            'semana_status' => 'N',
            'hora' => 0.24,
            'dia' => 4.83,
            'semana' => 6.75,
        ]);
        
        Titulo::create([
            'idExterno' => '7',
            'sigla' => 'TI32',
            'nome' => 'Tesouro IPCA+ 2032',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 5.52,
            'valorNominal' => 4377.98,
            'aliquotaIR' => 22.50,
            'taxa_b3' => 1.4,
            'isentoIOF' => 1,
            'hora_status' => 'P',
            'dia_status' => 'N',
            'semana_status' => 'N',
            'hora' => 0.18,
            'dia' => 2.97,
            'semana' => 1.75,
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
            'hora_status' => 'P',
            'dia_status' => 'N',
            'semana_status' => 'N',
            'hora' => 0.78,
            'dia' => 4.06,
            'semana' => 1.43,
        ]);
        
        Titulo::create([
            'idExterno' => '9',
            'sigla' => 'TE29',
            'nome' => 'Tesouro Educa+ 2029',
            'dataVencimento' => now()->addDays(rand(1, 30)),
            'rentabilidadeAnual' => 5.45,
            'valorNominal' => 3112.29,
            'aliquotaIR' => 19.0,
            'taxa_b3' => 3.5,
            'isentoIOF' => 4,
            'hora_status' => 'N',
            'dia_status' => 'P',
            'semana_status' => 'P',
            'hora' => 0.78,
            'dia' => 4.06,
            'semana' => 1.43,
        ]);
        
    }
}
