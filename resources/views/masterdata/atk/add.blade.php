@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Barang-ATK') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('Barang-ATK')}}" enctype="multipart/form-data" >
                @csrf
              <div class="box-body">

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="harga">Harga Beli</label>
                  <input type="number" name="harga" class="form-control" placeholder="Harga" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="minimal_stok">Minimal Stok</label>
                  <input type="text" name="minimal_stok" class="form-control" placeholder="Minimal Stok" required autocomplete="off">
                </div>

               
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-flat btn-primary">Tambah Data</button>
              </div>
            </form>
               
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