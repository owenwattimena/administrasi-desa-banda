<?php

namespace App\Http\Controllers;

use App\Helpers\AlertFormatter;
use App\Models\RukunTetangga;
use Illuminate\Http\Request;

class RukunTetanggaControler extends Controller
{
    public function index()
    {
        $data['rt'] = RukunTetangga::all();
        return view("dashboard.master.rukun-tetangga.index", $data);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'rt' => 'required'
        ]);

        if(RukunTetangga::create($data))
        {
            return redirect()->back()->with(AlertFormatter::success('Berhasil menambah data'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Gagal menambah data'));
    }

    public function delete(Request $request, int $id)
    {
        if(RukunTetangga::destroy($id))
        {
            return redirect()->back()->with(AlertFormatter::success('Berhasil menghapus data'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Gagal menghapus data'));
    }
}
