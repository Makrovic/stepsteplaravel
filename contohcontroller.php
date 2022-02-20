<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
       $count=Siswa::count();
        $siswa = Siswa::create([
            'nis' =>$count+1 ,
            'nama'=> $request->nama,
            'asal_sekolah'=> $request->asal_sekolah,
            'kompetensi_keahlian'=> $request->kompetensi_keahlian,
            'alamat'=> $request->alamat
        ]);
        return back();
    }
}
