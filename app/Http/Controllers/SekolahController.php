<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function dashboard() {
        $data_siswa = Siswa::all();
        $data_kelas = Kelas::all();
        return view('dashboard', compact('data_siswa', 'data_kelas'));
    }
}
