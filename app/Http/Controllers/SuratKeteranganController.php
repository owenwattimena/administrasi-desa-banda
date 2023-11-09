<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use App\Models\Warga;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SuratKeteranganController extends Controller
{
    private Pengaturan $pengaturan;
    public function __construct()
    {
        $this->pengaturan = Pengaturan::all()->first();
    }
    public function domisili()
    {
        return view('dashboard.surat-keterangan.domisili.domisili');
    }

    public function domisiliPdfView(){
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.domisili.domisili-pdf', $data);
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
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.tidak-mampu.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function pindah(Request $request)
    {
        $data['data'] = $request->input();
        // dd($data);
        return view('dashboard.surat-keterangan.pindah.index', $data);
    }

    public function pindahPdfView(Request $request)
    {
        // dd($request->query());
        $data['alamat_pindah'] = $request->query();
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.pindah.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function izinUsaha(Request $request)
    {
        $data['data'] = $request->input();
        return view('dashboard.surat-keterangan.izin-usaha.index', $data);
    }

    public function izinUsahaPdfView(Request $request)
    {
        $data['usaha'] = $request->query();
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.izin-usaha.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function kematian(Request $request)
    {
        $data['data'] = $request->input();
        return view('dashboard.surat-keterangan.kematian.index', $data);
    }

    public function kematianPdfView(Request $request)
    {
        $data['data'] = $request->query();
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.kematian.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
    // ------------------------
    public function belumNikah()
    {
        return view('dashboard.surat-keterangan.belum-nikah.index');
    }

    public function belumNikahPdfView()
    {
        $warga = \Auth::user()->warga;
        $data['keluarga'] = Warga::where('no_kk', $warga->no_kk)->get();
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.belum-nikah.pdf', $data);
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
        $data['pengaturan'] = $this->pengaturan;
        $pdf = Pdf::loadView('dashboard.surat-keterangan.penghasilan-orang-tua.pdf', $data);
        return $pdf->stream('tidak-mampu.pdf');
    }
}
