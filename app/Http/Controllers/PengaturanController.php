<?php

namespace App\Http\Controllers;

use App\Helpers\AlertFormatter;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $data['pengaturan'] = Pengaturan::all()->first();
        return view('dashboard.pengaturan.index', $data);
    }

    public function createOrUpdate(Request $request)
    {
        $request->validate(
            [
                'nama_pejabat_negeri' => 'required',
                'nip_pejabat_negeri' => 'required',
            ]
        );

        $pengaturan = Pengaturan::all()->first();
        if($pengaturan == null)
        {
            $pengaturan = new Pengaturan;
        }
        $pengaturan->nama_pejabat_negeri = $request->nama_pejabat_negeri;
        $pengaturan->nip_pejabat_negeri = $request->nip_pejabat_negeri;
        if($pengaturan->save())
        {
            return redirect()->back()->with(AlertFormatter::success('Berhasil menyimpan data pengaturan'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Gagal menyimpan data pengaturan'));
    }
}
