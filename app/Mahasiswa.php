<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim','nama', 'alamat', 'tgl_lahir','kode_prodi', 'jenis_kelamin'
    ];

    public function syarat(){
        return $this->hasOne('App\Syarat', 'nim');
    }
}
