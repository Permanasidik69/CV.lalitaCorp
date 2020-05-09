@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Stok-Barang-OROKKIDS') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                   
                        <img src="{{ URL::to('/') }}/images/{{$dt->foto}}" class="img-fluid" width="1000px" height="600px">
                        <tr>
                            <th>Supplier</th>
                            <td>:</td>
                            <td>{{$dt->suppliers->nama}}</td>
                            
                            <th>SKU</th>
                            <td>:</td>
                            <td>{{$dt->sku}}</td>
                        </tr>

                        <tr>
                            <th>Nama Barang</th>
                            <td>:</td>
                            <td>{{$dt->nama_barang}}</td>

                            <th>Harga Jual</th>
                            <td>:</td>
                            <td>Rp.{{ number_format($dt->harga_jual, 2) }}</td>
                        </tr>
                    
                        <tr>
                            <th>Minimal Stok</th>
                            <td>:</td>
                            <td>{{$dt->minimal_stok}}</td>

                            <th>Stok Barang</th>
                            <td>:</td>
                            <td>{{$dt->stok}}</td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td>:</td>
                            <td>{{$dt->created_at}}</td>

                            <th>Updated_at</th>
                            <td>:</td>
                            <td>{{$dt->updated_at}}</td>
                        </tr>
                       
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