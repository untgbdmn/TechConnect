<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function list(Request $request) {
        $search = $request->input("search");

        $data = Kelas::orderBy('nama_kelas', 'ASC');
        if ($search) {
            $data->where('nama_kelas', 'ILIKE', '%' . $search . '%');
        }

        $kelas = $data->paginate(10);

        return view('kelas.list', compact('kelas'));
    }

    public function create() {
        return view("kelas.add");
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'tingkat_kelas' => 'required|string|max:255',
        ]);

        $kelas_code = random_int(11111, 99999);
        $add = [
            'nama_kelas' => $request->input('nama_kelas'),
            'tingkat_kelas' => $request->input('tingkat_kelas'),
            'kelas_code' => $request->input('tingkat_kelas') . "-" . $kelas_code,
        ];

        $kelas = Kelas::create($add);
        if ($kelas) {
            return redirect()->route('kelas.list')->with('success', 'Berhasil menyimpan data kelas!');
        } else {
            return redirect()->route('kelas.create')->with('failed', 'Gagal menyimpan data kelas!');
        }
    }

    public function editform($id) {
        $kelas = Kelas::where('kelas_id', $id)->first();
        // dd($kelas);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id) {
        $update = Kelas::where('kelas_id', $id);
        $kelas_code = random_int(11111, 99999);
        $data = [
            'nama_kelas' => $request->input('nama_kelas'),
            'tingkat_kelas' => $request->input('tingkat_kelas'),
            'kelas_code' => $request->input('tingkat_kelas') . "-" . $kelas_code,
        ];

        if ($data) {
            $update->update($data);
            return redirect()->route('kelas.list')->with('success', 'Berhasil mengubah data kelas!');
        }
    }

    public function destroy($id) {
        $kelas = Kelas::where('kelas_id', $id)->first();
        if ($kelas) {
            $kelas->delete();
            return redirect()->route('kelas.list')->with('success', 'Berhasil menghapus data kelas!');
        } else {
            return redirect()->route('kelas.list')->with('failed', 'Gagal menghapus data kelas!');
        }
    }
}
