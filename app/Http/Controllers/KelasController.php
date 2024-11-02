<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function list() {
        $kelas = Kelas::all();
        return view('kelas.list', compact('kelas'));
    }

    public function create() {
        return view("kelas.add");
    }

    public function store(Request $request) {
        $requestData = $request->all();
        // dd($requestData);
        $created = [
            'nama_kelas' => $requestData['nama_kelas'],
            'tingkat_kelas' => $requestData['tingkat_kelas'],
        ];

        $add = Kelas::create($created);
        if ($add) {
            return redirect()->route('kelas.list')->with('success', 'Kelas berhasil ditambahkan');
        } else {
        }
    }
}
