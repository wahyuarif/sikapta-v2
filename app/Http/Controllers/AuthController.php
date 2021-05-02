<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Prodi;
use App\Mahasiswa;
use DB;


use Hash;

class AuthController extends Controller
{
    //

    public function index(){

        return view('auth.login');
    }

    public function login(Request $request){


        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        // cek data user 
        if ($user) {
            if (/*$user->email_verifikasi*/true) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('otentikasi', true);
                    $request->session()->put('user', $user);

                    if ($user->role == 'mahasiswa') {
                        return redirect()->route('syarat.index');
                    }else{
                        return redirect('dosen.welcome');

                    }

                }else {
                    return redirect()->back()
                            ->with('msg', 'Password yang anda masukan salah')
                            ->withInput($request->except('password'));;
                }   
            }else{
                return redirect()->back()
                        ->with('msg', 'Akun anda belum terverifikasi')
                        ->withInput($request->except('password'));;
            }
        }else{
            return redirect()
                    ->back()
                    ->with('msg', 'Email anda belum terdaftar')
                    ->withInput($request->except('password'));
        }
    }

    public function registrasi(){
        $data['prodi'] = Prodi::all();
        return view('auth.registrasi', $data);
    }

    public function store(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'nim' => 'required|unique:user,nomer_identitas',
            'email' => 'required|email|unique:user,email',
            'password1' => 'required|min:5|required_with:password2|same:password2',
        ]);

        DB::beginTransaction();

        try {
            // input user
            $user = new User;
            $user->nomer_identitas = $request->nim;
            $user->email = $request->email;
            $user->role = 'mahasiswa';
            $user->password = bcrypt($request->password1);
            $user->save();
            
            // input mahasiswa
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama = null;
            $mahasiswa->kode_prodi = $request->prodi;
            $mahasiswa->jenis_kelamin = null;
            $mahasiswa->save();
            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
      
  
        
        return redirect('/')->with('msg', 'Berhasil Mendaftarkan Akun , silahlan Konfirmasi Email anda');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('');
    }
}
