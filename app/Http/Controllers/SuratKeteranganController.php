<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SuratKeteranganController extends Controller
{
    public function domisili()
    {
        return view('dashboard.surat-keterangan.domisili');
    }
    public function domisiliPdf()
    {
        return view('dashboard.surat-keterangan.domisili-pdf');
    }
    public function domisiliPdfView(){
        $pdf = Pdf::loadView('dashboard.surat-keterangan.domisili-pdf');
        return $pdf->stream('domisili.pdf');
    }
}
