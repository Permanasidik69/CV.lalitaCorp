@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="myTable">
                <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Nama Barang</th>
                                    <th><center>Nama Pelanggan</th>
                                    <th><center>Harga</th>
                                    <th><center>No Telepon</th>
                                    <th><center>Alamat</th>
                                    <th><center>Variasi</th>
                                    <th><center>Notes</th>
                                    <th><center>Qty</th>
                                    <th><center>Payment Method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
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