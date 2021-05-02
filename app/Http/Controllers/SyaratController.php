<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Syarat;

class SyaratController extends Controller
{
 
    public function index()
    {
        // dd(str_random(5).time());
        return view('syarat.index');
    }

    public function store(Request $request)
    {
        $nim = session('user')->nomer_identitas;

        $this->validate($request, [
            'transkrip' => 'required|mimes:pdf',
            'slip_pembayaran' => 'required|mimes:jpg,jpeg,png|max:2000',
            'surat_ijin_survey' => 'mimes:pdf',

        ]);

        $nameTranskrip = 'TRS-'.$nim.time().str_random(5);
        $pathtTanskrip = '/data_file/transkrip/'.$nameTranskrip;

        $nameSlip = 'SLIP-'.$nim.time().str_random(5);
        $pathSlip = 'data_file/slip_pembayaran/' . $nameSlip;

        $nameSurat = 'SIS-' . $nim . time() . str_random(5);
        $pathSurat = 'data_file/surat_ijin_survey/' . $nameSurat;

        // Memasukan ke dalam syarat
        Syarat::create([
            'transkrip_nilai' => $pathtTanskrip,
            'slip_bayar' => $pathSlip,
            'surat_ijin_survey' => $pathSurat 
        ])->syarat('nim');


        $request->file('transkrip')->move($pathtTanskrip, $nameTranskrip);
        $request->file('slip_pembayaran')->move($pathSlip, $nameSlip);
        $request->file('surat_ijin_survey')->move($pathSurat, $nameSurat);
        
        return redirect()->back();

    }

}
