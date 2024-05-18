<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = [
            [
                'nama'=>'Teknologi',
            ],
            [
                'nama'=>'Akademik',
            ],
            [
                'nama'=>'Budaya',
            ],
            [
                'nama'=>'Kesehatan'
            ],
            [
                'nama'=>'Sosial',
            ],

        ];

        foreach ($kategoris as $key => $value) {
            Kategori::create($value);
        }
    }
}
