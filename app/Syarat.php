<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    //
    protected $table = 'syarat';

    protected $fillable = [
        'nim', 'transkrip_nilai', 'slip_bayar', 'surat_ijin_survey', 'is_acc'
    ];


}
