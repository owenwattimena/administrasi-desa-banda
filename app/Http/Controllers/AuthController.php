<?php

namespace App\Http\Controllers;

use App\Helpers\AlertFormatter;
use App\Models\User;
use App\Models\Warga;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $data = $request->validate(
            [
                'no_kk' => 'required',
                'nik' => 'required|unique:warga,nik',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'status_hubungan_keluarga' => 'required',
                'agama' => 'required',
                'pendidikan' => 'required',
                'pekerjaan' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat' => 'required',
                'rw' => 'required',
                'rt' => 'required',
                'password' => 'required',
            ]
        );
        return DB::transaction(function () use ($data, $request) {

            if (Warga::create($data)) {
                $user = new User;
                $user->nama = $request->nama;
                $user->username = $request->nik;
                $user->password = Hash::make($request->password);
                if (!$user->save()) {
                    DB::rollBack();
                    return redirect()->back()->with(AlertFormatter::danger('Proses registrasi gagal. Mohon periksa kembali data yang anda masukan!'));
                }
                return redirect()->back()->with(AlertFormatter::success('Proses registrasi berhasil. Anda akan menerima email apabila telah di verifikasi!'));
            }
            return redirect()->back()->with(AlertFormatter::danger('Proses registrasi gagal. Mohon periksa kembali data yang anda masukan!'));
        });

    }

    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        $remember = false;
        if($request->remember)
        {
            $remember = true;
        }

        if(Auth::attempt($data, $remember))
        {
            return redirect()->intended('/');
        }
        return redirect()->back()->with(AlertFormatter::danger('Username atau Password salah'));

    }
}
