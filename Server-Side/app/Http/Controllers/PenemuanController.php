<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penemuan;

class PenemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tampil Data
        $datas['penemuan'] = Penemuan::all();
        return view('penemuan.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tambah Data
        return view('penemuan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Simpan Data
        $request->validate([
            
        ]);

        $file=$request->file('gambar');
        $file->move(base_path('public/asset/img2'), $file->getClientOriginalName());

        $datas = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'tanggal_ketemu' => $request->tanggal_ketemu,
            'jenis' => $request->jenis,
            'spek' => $request->spek,
            'kronologi' => $request->kronologi,
            'gambar' => $file->getClientOriginalName(),
        ];

        Penemuan::create($datas);

        return redirect()->route('penemuan.index')->with('berhasil', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit Data
        $data['penemuan'] = Penemuan::find($id);

        return view('penemuan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update Data
        $penemuan = Penemuan::findOrFail($id);

        $request->validate([
            
        ]);

        $file=$request->file('gambar');
        $file->move(base_path('public/asset/img2'), $file->getClientOriginalName());

        $datas = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'tanggal_ketemu' => $request->tanggal_ketemu,
            'jenis' => $request->jenis,
            'spek' => $request->spek,
            'kronologi' => $request->kronologi,
            'gambar' => $file->getClientOriginalName(),
        ];

        $penemuan->update($datas);
        
        return redirect()->route('penemuan.index')->with('berhasil', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Hapus Data
        $penemuan = Penemuan::find($id);

        $penemuan->delete();

        return redirect()->route('penemuan.index')->with('berhasil','Data Telah Dihapus');
    }
}
