<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SuratKeteranganController extends Controller
{
    public function domisili()
    {
        return view('dashboard.surat-keterangan.domisili.domisili');
    }

    public function domisiliPdfView(){
        $pdf = Pdf::loadView('dashboard.surat-keterangan.domisili.domisili-pdf');
        return $pdf->stream('domisili.pdf');
    }

    // ------------------------
    public function tidakMampu()
    {
        return view('dashboard.surat-keterangan.tidak-mampu.index');
    }

    public function tidakMampuPdfView()
    {
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $pdf = Pdf::loadView('dashboard.surat-keterangan.tidak-mampu.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function pindah()
    {
        return view('dashboard.surat-keterangan.pindah.index');
    }

    public function pindahPdfView()
    {
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $pdf = Pdf::loadView('dashboard.surat-keterangan.pindah.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function izinUsaha()
    {
        return view('dashboard.surat-keterangan.izin-usaha.index');
    }

    public function izinUsahaPdfView()
    {
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $pdf = Pdf::loadView('dashboard.surat-keterangan.izin-usaha.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function penghasilanOrangTua()
    {
        return view('dashboard.surat-keterangan.penghasilan-orang-tua.index');
    }

    public function penghasilanOrangTuaPdfView()
    {
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $pdf = Pdf::loadView('dashboard.surat-keterangan.penghasilan-orang-tua.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
}
