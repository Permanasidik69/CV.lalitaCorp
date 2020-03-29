@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Stok-Barang-OROKKIDS/create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-edit"></i> Tambah Data</a>
                </p>
            </div>
            <div class="box-body">

            <div class="table-responsive">
                    <table  class="table myTable">
                            <thead>
                                <tr>
                                    <th><center>Action</th>
                                    <th><center>No</th>
                                    <th><center>Supplier</th>
                                    <th><center>Nama Barang</th>
                                    <th><center>SKU</th>
                                    <th><center>Stok Barang</th>
                                    <th><center>Minimal Stok</th>
                                    <th><center>Harga</th>
                                    <th><center>Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $e=>$dt)
                                <tr align="center">
                                    <td>
                                        <div style="width:60px">
                                            <a href="{{ url('Stok-Barang-OROKKIDS/'. $dt->id. '/edit') }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> 
                                            <button href="{{ url('Stok-Barang-OROKKIDS/'. $dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </td>
                                    <td>{{$e+1}}</td>
                                    <td>{{$dt->suppliers->nama}}</td>
                                    <td>{{$dt->sku}}</td>
                                    <td>{{$dt->nama_barang}}</td>
                                    <td>{{$dt->stok}}</td>
                                    <td>{{$dt->minimal_stok}}</td>
                                    <td>Rp.{{ number_format($dt->harga, 2) }}</td>
                                    <td>{{$dt->updated_at}}</td>
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