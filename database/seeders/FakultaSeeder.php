<?php

namespace Database\Seeders;

use App\Models\Fakulta;
use Illuminate\Database\Seeder;

class FakultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultas = [
            [
                'name' => 'Fakultas Ilmu Komputer',
                'kode' => 'FKOM'
            ],
            [
                'name' => 'Fakultas Ekonomi',
                'kode' => 'FE'
            ],
            [
                'name' => 'Fakultas Hukum',
                'kode' => 'FH'
            ],
            [
                'name' => 'Fakultas Ilmu Keguruan Dan Pendidikan',
                'kode' => 'FKIP'
            ], [
                'name' => 'Fakultas Kehutanan',
                'kode' => 'FHUT'
            ],
        ];

        foreach ($fakultas as $fakulta) {
            Fakulta::create($fakulta);
        }
    }
}
