<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    protected $table = 'prodi';

    protected $fillable = [
        'kode_prodi', 'prodi', 'dosen_id'
    ];   
}
