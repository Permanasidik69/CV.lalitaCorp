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
                    <table  class="table myTable">
                            <thead>
                                <tr>
                                    <th><center>Action</th>
                                    <th><center>Supplier</th>
                                    <th><center>Nama Barang</th>
                                    <th><center>SKU</th>
                                    <th><center>Stok Barang</th>
                                    <th><center>Minimal Stok</th>
                                    <th><center>Harga</th>
                                    <th><center>Created_at</th>
                                </tr>
                            </thead>   
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