<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_MData_ADV;
use App\Models\M_Supplier;

class MasterData_ADV_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Master Data ADV";
        $data = M_MData_ADV::orderBy('nama_barang', 'asc')->get();

        return view('masterdata/adv.index', compact('title', 'data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Tambah Stok Barang ADV';
        $supplier = M_Supplier::get();
        $sku = date('ymds');

        return view('masterdata/adv.add', compact('title', 'supplier', 'sku'));
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
            'supplier'    => 'required',
            'sku'         => 'required',
            'nama_barang' => 'required',
            'stok'        => 'required',
            'minimal_stok'=> 'required',
            'harga'       => 'required',
        ]);

        $data = $request->except(['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        M_MData_ADV::insert($data);

        \Session::flash('sukses', 'Data Berhasil diTambahkan');
        return redirect('Stok-Barang-ADV');
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
        $title = 'Edit Stok Barang ADV';
        $supplier = M_Supplier::get();
        //$sku = date('ymds');
        $dt = M_MData_ADV::find($id);

        return view('masterdata/adv.edit', compact('title', 'supplier','dt'));
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
            'supplier'    => 'required',
            'sku'         => 'required',
            'nama_barang' => 'required',
            'stok'        => 'required',
            'minimal_stok'=> 'required',
            'harga'       => 'required',
        ]);

        $data = $request->except(['_token', '_method']);
        //$data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        M_MData_ADV::where('id', $id)->update($data);

        \Session::flash('sukses', 'Data Berhasil diEdit');
        return redirect('Stok-Barang-ADV');
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
        try {
            M_MData_ADV::where('id', $id)->delete();

            \Session::flash('sukses','Data Berhasil diHapus');
        } catch (Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }

        return redirect('Stok-Barang-ADV');
    }
}
