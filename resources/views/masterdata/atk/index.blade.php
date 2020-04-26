@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Barang-ATK/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-edit"></i> Tambah Data</a>
                    <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#importExcel">Import Excel</button>
                    
                    <!--IMPORT EXCEL-->
                    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                    </div>
                                    <div class="modal-body">

                                        {{ csrf_field() }}

                                        <label>Pilih file excel</label>
                                        <div class="form-group">
                                            <input type="file" name="file" required="required">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-flat btn-sm">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--IMPORT EXCEL-->

                </p>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table  class="table myTable">
                            <thead>
                                <tr>
                                    <th><center>Action</th>
                                    <th><center>No</th>
                                    <th><center>Nama Barang</th>
                                    <th><center>Harga</th>
                                    <th><center>Stok Barang</th>
                                    <th><center>Minimal Stok</th>
                                    <th><center>Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $e=>$dt)
                                <tr align="center">
                                    <td>
                                        <div style="width:80px">
                                            <a href="{{ url('Barang-ATK/'. $dt->id. '/edit') }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>

                                            <button href="{{ url('Barang-ATK/'. $dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>

                                        </div>
                                    </td>
                                    <td>{{$e+1}}</td>
                                    <td>{{$dt->nama_barang}}</td>
                                    <td>Rp.{{ number_format($dt->harga, 2) }}</td>
                                    <td>{{$dt->stok_barang}}</td>
                                    <td>{{$dt->minimal_stok}}</td>
                                    <td>{{ date('d M Y', strtotime($dt->updated_at )) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection