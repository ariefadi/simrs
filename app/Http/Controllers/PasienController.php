<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pasien.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ],
        [
            'nama.required' => 'Nama Pasien tidak boleh kosong',
            'alamat.required' => 'Alamat Pasien tidak boleh kosong',
            'no_telepon.required' => 'No Telepon Pasien tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin Pasien tidak boleh kosong',
            'foto.image' => 'File yang diupload harus berupa gambar',
            'foto.mimes' => 'File yang diupload harus berupa jpeg, png, jpg',
            'foto.max' => 'Ukuran file maksimal 2MB'
        ]);
        //jika file foto ada yang terupload
        if(!empty($request->foto)){
            //maka proses berikut yang dijalankan
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->foto->move(public_path('images'), $fileName);
        } else {
            $fileName = 'user.png';
        }
        //tambah data produk
        DB::table('pasiens')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $fileName
        ]);

        //setelah data berhasil ditambahkan, alihkan ke halaman index
        return redirect()->route('index.index')->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $id)
    {
        //
        return view('pasien.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi data
        $request ->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ],
        [
            'nama.required' => 'Nama Pasien tidak boleh kosong',
            'alamat.required' => 'Alamat Pasien tidak boleh kosong',
            'no_telepon.required' => 'No Telepon Pasien tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin Pasien tidak boleh kosong',
            'foto.image' => 'File yang diupload harus berupa gambar',
            'foto.mimes' => 'File yang diupload harus berupa jpeg, png, jpg',
            'foto.max' => 'Ukuran file maksimal 2MB'
        ]);

        // foto lama
        $fotoLama = DB::table('pasiens')->select('foto')->where('id', $id)->get();
        foreach ($fotoLama as $item) {
            $fotoLama = $item->foto;
        }

        // jika foto baru diupload
        if(!empty($request->foto)) {
            // upload foto baru
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $fileName);
        } else {
            $fileName = $fotoLama;
        }

        // update data pasien
        DB::table('pasiens')->where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $fileName
        ]);

        // alihkan ke halaman index
        return redirect()->route('index.index')->with('success', 'Data Pasien Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Pasien $id)
    {
        //
        $id->delete();

        return redirect()->route('index.index')->with('success', 'Data Pasien Berhasil Dihapus');
    }
}
