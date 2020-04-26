<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_MData_ATK;

class MasterData_ATK_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Master Data ATK";
        $data = M_MData_ATK::orderBy('nama_barang', 'asc')->get();

        return view('masterdata/atk.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Tambah Stok Barang ATK';

        return view('masterdata/atk.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga'       => 'required',
            'minimal_stok'=> 'required',
        ]);

        $data = array(
            'nama_barang'  => $request->nama_barang,
            'harga'  => $request->harga,
            'stok_barang'  => 0,
            'minimal_stok'  => $request->minimal_stok,
        );
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        M_MData_ATK::insert($data);

        \Session::flash('sukses', 'Data Berhasil diTambahkan');
        return redirect('Barang-ATK');
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
        $title = 'Edit Stok Barang ATK';
        $dt = M_MData_ATK::find($id);

        return view('masterdata/atk.edit', compact('title', 'dt'));
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
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga'       => 'required',
            'minimal_stok'=> 'required',
        ]);

        $data = array(
            'nama_barang'  => $request->nama_barang,
            'harga'  => $request->harga,
            'stok_barang'  => 0,
            'minimal_stok'  => $request->minimal_stok,
        );
        $data['updated_at'] = date('Y-m-d H:i:s');

        M_MData_ATK::whereId($id)->update($data);

        \Session::flash('sukses', 'Data Berhasil diEdit');
        return redirect('Barang-ATK');
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
