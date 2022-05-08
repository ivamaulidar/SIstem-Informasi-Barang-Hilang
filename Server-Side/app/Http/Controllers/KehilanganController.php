<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehilangan;

use function Ramsey\Uuid\v1;

class KehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tampil Data
        $datas['kehilangan'] = Kehilangan::all();
        return view('kehilangan.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tambah Data
        return view('kehilangan.tambah');
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
        $file->move(base_path('public/asset/img'), $file->getClientOriginalName());

        $datas = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'spek' => $request->spek,
            'kronologi' => $request->kronologi,
            'gambar' => $file->getClientOriginalName(),
        ];

        Kehilangan::create($datas);

        return redirect()->route('kehilangan.index')->with('berhasil', 'Data Telah Ditambahkan');
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
        $data['kehilangan'] = Kehilangan::find($id);

        return view('kehilangan.edit', $data);
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
        $kehilangan = Kehilangan::findOrFail($id);

        $request->validate([
            
        ]);

        $file=$request->file('gambar');
        $file->move(base_path('public/asset/img'), $file->getClientOriginalName());

        $datas = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'spek' => $request->spek,
            'kronologi' => $request->kronologi,
            'gambar' => $file->getClientOriginalName(),
        ];

        $kehilangan->update($datas);
        
        return redirect()->route('kehilangan.index')->with('berhasil', 'Data Telah Diubah');
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
        $kehilangan = Kehilangan::find($id);

        $kehilangan->delete();

        return redirect()->route('kehilangan.index')->with('berhasil','Data Telah Dihapus');
    }
}
