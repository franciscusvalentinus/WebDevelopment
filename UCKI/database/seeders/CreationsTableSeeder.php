<?php

namespace Database\Seeders;

use App\Models\Creation;
use Illuminate\Database\Seeder;

class CreationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $creations = [
            [
                'creation'  => 'Booklet',
            ],
            [
                'creation'  => 'Buku',
            ],
            [
                'creation'  => 'Buku Panduan/Petunjuk',
            ],
            [
                'creation'  => 'Buku Saku',
            ],
            [
                'creation'  => 'Jurnal',
            ],
            [
                'creation'  => 'Karya Tulis (artikel)',
            ],
            [
                'creation'  => 'Laporan Penelitian',
            ],
            [
                'creation'  => 'Modul',
            ],
            [
                'creation'  => 'Proposal Penelitian',
            ],
            [
                'creation'  => 'Alat Peraga',
            ],
            [
                'creation'  => 'Arsitektur',
            ],
            [
                'creation'  => 'Brosur',
            ],
            [
                'creation'  => 'Peta',
            ],
            [
                'creation'  => 'Poster',
            ],
            [
                'creation'  => 'Seni Gambar',
            ],
            [
                'creation'  => 'Film Iklan',
            ],
            [
                'creation'  => 'Program Komputer',
            ],
        ];

        Creation::insert($creations);
    }
}
