<?php

use Illuminate\Database\Seeder;

use App\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Mahasiswa::truncate();
        Mahasiswa::create([
            'nim' => '2019150080',
            'nama'=> 'Ahmad Rifai', 
            'alamat' => 'Rejosari, Bawaang , Batang' , 
            'tgl_lahir' => '2001-07-16',
            'kode_prodi' => 1, 
            'jenis_kelamin' => 'L'
        ]);
       

    }
}
