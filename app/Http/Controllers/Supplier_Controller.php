<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Supplier;

class Supplier_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title="Data Supplier";
        $data = M_Supplier::orderBy('nama', 'asc')->get();

        return view('orderbarang/supplier.index',compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Tambah Data Supplier";

        return view('orderbarang/supplier.add', compact('title'));
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
            'nama'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
        ]);

        $a['nama'] = $request->nama;
        $a['no_telp'] = $request->no_telp;
        $a['alamat'] = $request->alamat;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');
        
        M_Supplier::insert($a);

        \Session::flash('sukses','Data Berhasil diTambahkan');

        return redirect('Data-Supplier');
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
        $title = 'Edit Data Supplier';
        $dt = M_Supplier::find($id);

        return view('orderbarang/supplier.edit', compact('title', 'dt'));
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
            'nama'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
        ]);

        $a['nama'] = $request->nama;
        $a['no_telp'] = $request->no_telp;
        $a['alamat'] = $request->alamat;
        //$a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');
        
        M_Supplier::where('id', $id)->update($a);

        \Session::flash('sukses','Data Berhasil diUpdate');

        return redirect('Data-Supplier');

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
            M_Supplier::where('id', $id)->delete();

            \Session::flash('sukses','Data Berhasil diHapus');
        } catch (Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }

        return redirect('Data-Supplier');
    }
}
