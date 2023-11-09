<?php

namespace App\Http\Controllers;

use App\Helpers\AlertFormatter;
use App\Models\RukunTetangga;
use App\Models\User;
use App\Models\Warga;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $data['penduduk'] = Warga::get();
        $data['rt'] = RukunTetangga::all();
        $idRt = $request->query('rt');
        if($idRt)
        {
            if($idRt > 0)
            {
                $data['penduduk'] = Warga::where('id_rt', $idRt)->get();
            }else{
                $data['penduduk'] = Warga::get();
            }
        }
        if($request->query('cetak'))
        {
            $pdf = Pdf::loadView('dashboard.penduduk.pdf', $data)->setPaper('a4', 'landscape');
            return $pdf->stream('data-penduduk.pdf');
        }
        return view('dashboard.penduduk.index', $data);
    }

    public function show(int $id)
    {
        $data['warga'] = Warga::findOrFail($id);
        return view('dashboard.penduduk.show', $data);
    }

    public function confirm(Request $request, int $id)
    {
        if($request->confirm == 'tolak')
        {
            try {
                return DB::transaction(function () use ($id) {
                    $warga = Warga::findOrFail($id);
                    $nik = $warga->nik;
                    if ($warga->delete() <= 0)
                        return redirect()->back()->with(AlertFormatter::danger('Gagal menolak data'));
                    if (User::where('username', $nik)->delete() > 0)
                        return redirect()->route('penduduk')->with(AlertFormatter::success('Berhasil menolak data'));
                    DB::rollaback();
                    return redirect()->back()->with(AlertFormatter::danger('Gagal menolak data'));
                });

            } catch (\Exception $e) {
                return redirect()->back()->with(AlertFormatter::danger('Gagal menolak data. ' . $e->getMessage()));
            }
        }else if($request->confirm == 'terima')
        {
            $warga = Warga::findOrFail($id);
            $warga->confirmed_at = now();
            if($warga->save())
            {
                return redirect()->route('penduduk')->with(AlertFormatter::success('Berhasil menerima data'));
            }
            return redirect()->back()->with(AlertFormatter::danger('Gagal menerima data'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Proses verifikasi gagal'));
    }

    public function delete(Request $request, $id)
    {
        try {
            return DB::transaction(function () use ($id) {
                $warga = Warga::findOrFail($id);
                $nik = $warga->nik;
                if ($warga->delete() <= 0)
                    return redirect()->back()->with(AlertFormatter::danger('Gagal menghapus data'));
                if (User::where('username', $nik)->delete() > 0)
                    return redirect()->back()->with(AlertFormatter::success('Berhasil menghapus data'));
                DB::rollaback();
                return redirect()->back()->with(AlertFormatter::danger('Gagal menghapus data'));
            });

        } catch (\Exception $e) {
            return redirect()->back()->with(AlertFormatter::danger('Gagal menghapus data. ' . $e->getMessage()));
        }
    }

}
