<?php

namespace App\Http\Controllers;

use App\Helpers\AlertFormatter;
use App\Models\RukunTetangga;
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
        $data['rt'] = RukunTetangga::all();
        return view('auth.register', $data);
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
                'status_perkawinan' => 'required',
                'pekerjaan' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat' => 'required',
                'id_rt' => 'required',
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
                return redirect()->back()->with(AlertFormatter::success('Proses registrasi berhasil. Data anda akan segera di verifikasi!'));
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
            $user = Auth::user();
            if($user->role == 'warga')
            {
                if($user->warga->confirmed_at == null)
                {
                    return redirect()->back()->with(AlertFormatter::danger('Login gagal. Data anda belum dikonfirmasi oleh admin.'));
                }
            }
            return redirect()->intended('/');
        }
        return redirect()->back()->with(AlertFormatter::danger('Username atau Password salah'));

    }
}
