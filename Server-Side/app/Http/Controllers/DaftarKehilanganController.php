<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehilangan;

class DaftarKehilanganController extends Controller
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
        $datas['kehilangan'] = Kehilangan::all();
        return view('daftar-hilang.index', $datas);
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

        return redirect('/form_kehilangan');
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
