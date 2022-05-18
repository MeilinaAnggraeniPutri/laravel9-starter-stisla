<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lms = [
            ['nama_mapel' => 'Matematika', 'nama_guru' => 'Kabul Arman'],
            ['nama_mapel' => 'Fisika', 'nama_guru' => 'Sri Andiningsih'],
            ['nama_mapel' => 'Kimia', 'nama_guru' => 'Sugiharti'],
            ['nama_mapel' => 'Matematika Peminatan', 'nama_guru' => 'Rofik Ahmad'],
            ['nama_mapel' => 'Seni Budaya', 'nama_guru' => 'Mohdiyanto'],
            ['nama_mapel' => 'Olahraga', 'nama_guru' => 'Usdika'],
            ['nama_mapel' => 'Biologi', 'nama_guru' => 'Muanasah'],
            ];
            DB::table('lms')->insert($lms);
    }
}
