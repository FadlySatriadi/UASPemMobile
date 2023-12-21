<?php

namespace App\Http\Controllers;

use App\Models\Pendor;
use Illuminate\Http\Request;
use DB;

class PendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtPendor = Pendor::where('nama_pendor', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $dtPendor = Pendor::all();
        }
        // $dtVendor = Vendor::all();
        return view('Pendor.data_pendor', compact('dtPendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pendor.create_pendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Pendor::create([
            'nama_pendor' => $request->nama_pendor,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'no_telp' => $request->no_telp,
            'sosmed' => $request->sosmed
        ]);

        return redirect('data_pendor')->with('success', 'Data Berhasil Tersimpan!');
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtPendor = Pendor::findorfail($id);
        return view('edit_pendor', compact('dtPendor'));
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
        $dtPendor = Pendor::findorfail($id);
        $dtPendor->update($request->all());
        return redirect('data_pendor')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPendor = Pendor::findorfail($id);
        $dtPendor->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
