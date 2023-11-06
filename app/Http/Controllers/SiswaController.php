<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(){
        return view('siswa.input_siswa');
    }
    public function store(Request $request){
        Siswa::create([
            'nm_siswa'    => $request->nm_siswa,
            'nisn'        => $request->nisn,
            'jns_kelamin' => $request->jns_kelamin,
            'alamat'      => $request->alamat,
        ]);
        toastr()->success('Selamat Data Berhasil Disimpan !!');
        return back();
    }
}
