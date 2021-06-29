<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'nama_unit' => 'Biro Akademik, Kemahasiswaan dan Kerjasama',
            'nama_singkat' => 'BAKK',
        ]);

        Unit::create([
            'nama_unit' => 'Biro Umum Perencanaan dan Keuangan',
            'nama_singkat' => 'BPUK',
        ]);

        Unit::create([
            'nama_unit' => 'Fakultas Ekonomi',
            'nama_singkat' => 'FE',
        ]);

        Unit::create([
            'nama_unit' => 'Fakultas Ilmu Kelautan dan Perikanan',
            'nama_singkat' => 'FKIP',
        ]);

        Unit::create([
            'nama_unit' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
            'nama_singkat' => 'FISIP',
        ]);

        Unit::create([
            'nama_unit' => 'Fakultas Keguruan dan Ilmu Pendidikan',
            'nama_singkat' => 'FKIP',
        ]);

        Unit::create([
            'nama_unit' => 'Fakultas Teknik',
            'nama_singkat' => 'FT',
        ]);

        Unit::create([
            'nama_unit' => 'Lembaga Penelitian, Pengabdian Penjaminan Mutu',
            'nama_singkat' => 'LP3M',
        ]);

        Unit::create([
            'nama_unit' => 'Satuan Pengawasan Intern',
            'nama_singkat' => 'SPI',
        ]);

        Unit::create([
            'nama_unit' => 'Unit Pelaksana Teknis Perpustakaan',
            'nama_singkat' => 'UPT. Perpustakaan',
        ]);

        Unit::create([
            'nama_unit' => 'Unit Pelaksana Teknis PTIK',
            'nama_singkat' => 'UPT. PTIK',
        ]);

        Unit::create([
            'nama_unit' => 'Unit Pelaksana Teknis Pusat Bahasa',
            'nama_singkat' => 'UPT. Pusat Bahasa',
        ]);
    }
}
