<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table mahasiswa
        DB:: table ('mahasiswa')->insert([
            'id' => '01',
            'nama' => 'Agnes',
            'nim' => 'E41191622',
            'jenis_kelamin' => 'perempuan',
            'prodi' => 'Teknik Informatika',
            'no_hp' => '08xxxxxxxxxx',
        ])
    }
}
