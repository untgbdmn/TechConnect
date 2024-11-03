<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $req = [
            'nama_siswa' => $request->input('nama_siswa'),
            'kelas_id' => $request->input('select_kelas'),
            'no_induk' => $request->input('nomor_induk'),
            'no_induk_nasional' => $request->input('nomor_nasional'),
            'jenis_kelamin' => $request->input('gender'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'agama' => $request->input('agama'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
        ];
        Siswa::create($req);
        return redirect()->route('siswa.list')->with('success','Berhasil menambahkan data siswa!');
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
        $data_kelas = DB::table('_kelas')
            ->select('kelas_id', 'nama_kelas')
            ->whereIn('kelas_id', function ($query) {
                $query->select(DB::raw('MAX(kelas_id)'))
                    ->from('_kelas')
                    ->groupBy('nama_kelas');
            })
            ->get();
        $data = Siswa::where('siswa_id', $siswa->siswa_id)->first();
        return view('siswa.edit', ['data'=> $data, 'data_kelas' => $data_kelas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $req = [
            'nama_siswa' => $request->input('nama_siswa'),
            'kelas_id' => $request->input('select_kelas'),
            'no_induk' => $request->input('nomor_induk'),
            'no_induk_nasional' => $request->input('nomor_nasional'),
            'jenis_kelamin' => $request->input('gender'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'agama' => $request->input('agama'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
        ];

        $siswa->update( $req );
        return redirect()->route('siswa.list')->with('success','Berhasil mengubah data siswa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.list')->with('success','Berhasil menghapus data siswa!');
    }
}
