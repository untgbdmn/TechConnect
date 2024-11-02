<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input("search");
        $dataSiswa = Siswa::orderBy('nama_siswa', 'asc')->with('kelas');
        if ($search) {
            $dataSiswa->where('nama_siswa', 'ILIKE', '%' . $search . '%');
        }
        $dataSiswa = $dataSiswa->paginate(10);
        // dd($dataSiswa);
        return view('siswa.list', ['data' => $dataSiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_kelas = DB::table('_kelas')
            ->select('kelas_id', 'nama_kelas')
            ->whereIn('kelas_id', function ($query) {
                $query->select(DB::raw('MAX(kelas_id)'))
                    ->from('_kelas')
                    ->groupBy('nama_kelas');
            })
            ->get();

        return view('siswa.add', compact('data_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($siswa_id)
    {
        $siswa = Siswa::where('siswa_id', $siswa_id)->first();

        if (!$siswa) {
            return redirect()->route('siswa.list')->with('error', 'Data siswa tidak ditemukan.');
        }
        return view('siswa.detail', ['data' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
