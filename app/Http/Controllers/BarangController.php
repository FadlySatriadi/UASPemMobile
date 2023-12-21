<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtBarang = Barang::where('nama_barang', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $dtBarang = Barang::all();
        }
        // $dtPengguna = Pengguna::all();
        return view('Barang.Data_Barang', compact('dtBarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Barang.create_barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'bobot' => $request->bobot,
            'jenis_barang' => $request->jenis_barang,
        ]);

        return redirect('Data_Barang')->with('success', 'Data Berhasil Tersimpan!');
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
        $dtBarang = Barang::findorfail($id);
        return view('edit_barang', compact('dtBarang'));
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
        $dtBarang = Barang::findorfail($id);
        $dtBarang->update($request->all());
        return redirect('Data_Barang')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtBarang = Barang::findorfail($id);
        $dtBarang->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
