<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoskarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doskar::create([
            'nama' => 'Dosen',
        ]);

        Doskar::create([
            'nama' => 'Tenaga Kependidikan',
        ]);
    }
}
