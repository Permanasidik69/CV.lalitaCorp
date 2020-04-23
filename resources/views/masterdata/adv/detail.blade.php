@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Stok-Barang-ADV') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Barcode</th>
                            <td>:</td>
                            <td>{!! \DNS1D::getBarcodeHTML("$dt->sku", "I25+")!!}</td>
                        </tr>
                        <tr>
                            <th>Supplier</th>
                            <td>:</td>
                            <td>{{$dt->suppliers->nama}}</td>
                        </tr>

                        <tr>
                        <th>Nama Barang</th>
                            <td>:</td>
                            <td>{{$dt->nama_barang}}</td>
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