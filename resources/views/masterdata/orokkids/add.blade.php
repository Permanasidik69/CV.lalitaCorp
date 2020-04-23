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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('Stok-Barang-OROKKIDS')}}" >
                @csrf
              <div class="box-body">
                
                <div class="form-group">
                  <label for="supplier">Pilih Supplier</label>
                  <select class="form-control" select2 name="supplier" required>
                    @foreach($supplier as $sp)
                        <option value="{{ $sp->id }}">{{ $sp->nama }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>SKU</label>
                  <input type="text" name="sku" class="form-control" value="RKS{{ $sku }}" readonly placeholder="SKU Barang" required autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="minimal_stok">Minimal Stok</label>
                  <input type="number" name="minimal_stok" class="form-control" placeholder="Minimal Stok" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="harga">Harga Beli</label>
                  <input type="number" name="harga_beli" class="form-control" placeholder="Harga Beli" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="harga">Harga Jual</label>
                  <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual" min="1" required autocomplete="off">
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