<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['total_warga'] = Warga::count();
        $data['total_perempuan'] = Warga::where('jenis_kelamin', 'Perempuan')->count();
        $data['total_laki'] = Warga::where('jenis_kelamin', 'Laki-laki')->count();
        $data['total_kk'] = Warga::select('no_kk')->distinct()->count();
        return view('dashboard.home.index', $data);
    }
}
