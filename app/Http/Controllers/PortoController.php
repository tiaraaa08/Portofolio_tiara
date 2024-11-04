<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porto;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PortoController extends Controller
{

    public function index()//+
    {
        $porto = Porto::all();
        return view('index',['porto'=>$porto]);
    }
    public function detail($id)
{
    $porto = Porto::find($id);

    if (!$porto) {
        return redirect('/portofolio')->with('error', 'Data tidak ditemukan.');
    }

    return view('detail', ['porto' => $porto]);
}



    public function create()
    {

    }

    public function store(Request $request)
{
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('gambar', 'public');
    }

    // Ubah array teknologi menjadi string
    $teknologi = implode(', ', $request->input('teknologi', []));

    Porto::create([
        "nama" => $request->nama,
        "deskripsi" => $request->deskripsi,
        "teknologi" => $teknologi,
        "tanggal" => $request->tanggal,
        "link" => $request->link,
        "foto" => $fotoPath ?? null,
    ]);

    return redirect('/tabel')->with('success', 'Data berhasil ditambahkan!');
}


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
{
    $porto = Porto::findOrFail($id);

    $fotoPath = $porto->foto;
    if ($request->hasFile('foto')) {
        if ($porto->foto) {
            Storage::disk('public')->delete($porto->foto);
        }
        $fotoPath = $request->file('foto')->store('gambar', 'public');
    }

    $teknologi = implode(', ', $request->input('teknologi', []));

    $porto->update([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'teknologi' => $teknologi,
        'tanggal' => $request->tanggal,
        'link' => $request->link,
        'foto' => $fotoPath,
    ]);

    return redirect('/tabel')->with('success', 'Data berhasil diupdate!');
}


    public function destroy(string $id)
    {
        $porto = Porto::findOrFail($id);

        if ($porto->foto) {
            Storage::delete('public/' . $porto->foto);
        }

        $porto->delete();
        return redirect('/tabel');
    }
};
