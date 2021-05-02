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

        $transkrip = $request->file('transkrip');
        $slip = $request->file('slip_pembayaran');
        $surat = $request->file('surat_ijin_survey');

        $nameTranskrip = 'TRS-'.$nim.time().str_random(5) . '.'. $transkrip->getClientOriginalExtension();
       
        $nameSlip = 'SLIP-'.$nim.time().str_random(5) . '.'. $slip->getClientOriginalExtension();
    
        $nameSurat = 'SIS-' . $nim . time() . str_random(5) . '.' . $surat->getClientOriginalExtension();
    
        // Memasukan ke dalam syarat
        Syarat::create([
            'nim' => $nim,
            'transkrip_nilai' => $nameTranskrip,
            'slip_bayar' => $nameSlip,
            'surat_ijin_survey' => $nameSurat 
        ]);


        $transkrip->move( \storage_path('transkrip') ,$nameTranskrip);
        $slip->move(\storage_path('slip'),$nameSlip);
        $surat->move(\storage_path('surat'), $nameSurat);
        
        return redirect()->route('kp.index')->with('msg');

    }

}
