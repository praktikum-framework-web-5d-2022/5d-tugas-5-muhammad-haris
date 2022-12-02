<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index() {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }
    


    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request){
        $siswa = Siswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' =>$request->no_telp
        ]);
        

        $siswa->detailSiswa()->create([
            'no_telp_rumah' => $request->no_telp_rumah,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat
        ]);

        return redirect('siswas')->with('message', 'Sukses menambahkan data');
    }

    public function edit(Siswa $siswa) {

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Siswa $siswa, Request $request) {
        $siswa->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' =>$request->no_telp
        ]);

        $siswa->detailSiswa()->update([
            'no_telp_rumah' => $request->no_telp_rumah,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat
        ]);

        return redirect('siswas')->with('message', 'Sukses mengubah data');
    }

    public function destroy(Siswa $siswa) {
        $siswa->delete();
        return redirect('siswas')->with('message', 'Sukses menghapus data');
    }

    public function addEditDetail($id_siswa){
        $siswa = Siswa::findOrFail($id_siswa)->detailSiswa;
        return view('siswa.addedit-detail', compact('siswa', 'id_siswa'));
    }

    public function storeOrUpdateDetail(Request $request, $id_siswa )
    {
        $siswa = Siswa::findOrFail($id_siswa);
        $siswa->detailSiswa()->updateOrCreate(
            [
                'id_siswa'=> $id_siswa,
            ],
            [
                'no_telp_rumah'=> $request->no_telp_rumah,
                'kelas'=> $request->kelas,
                'alamat'=> $request->alamat,
            ]
            );
        return redirect('siswas')->with('message', 'Data berhasil disimpan');
    }
}
