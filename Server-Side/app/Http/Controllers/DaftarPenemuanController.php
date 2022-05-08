<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penemuan;

class DaftarPenemuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tampil Data
        $datas['penemuan'] = Penemuan::all();
        return view('daftar-ketemu.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        return redirect('/form_penemuan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
