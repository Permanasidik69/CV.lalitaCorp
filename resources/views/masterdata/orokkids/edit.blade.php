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

            <form role="form" method="POST" action="{{ url('Stok-Barang-OROKKIDS/'.$dt->id)}}" enctype="multipart/form-data">
            @csrf {{ method_field('PUT') }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="supplier">Pilih Supplier</label>
                  <select class="form-control" name="supplier" required>
                    @foreach($supplier as $sp)
                        <option value="{{ $sp->id }}" {{ ($dt->supplier == $sp->id) ? 'selected' : '' }}>{{ $sp->nama }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>SKU</label>
                  <input type="text" name="sku" class="form-control" value="{{ $dt->sku }}" placeholder="SKU Barang" required autocomplete="off">
                </div>
                
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" value="{{ $dt->nama_barang }}" placeholder="Nama Barang" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="minimal_stok">Minimal Stok</label>
                  <input type="number" name="minimal_stok" class="form-control" value="{{ $dt->minimal_stok }}" placeholder="Minimal Stok" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="harga">Harga Beli</label>
                  <input type="number" name="harga_beli" class="form-control" value="{{ $dt->harga_beli }}" placeholder="Harga Beli" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="harga">Harga Jual</label>
                  <input type="number" name="harga_jual" class="form-control" value="{{ $dt->harga_jual }}" placeholder="Harga Jual" min="1" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Pilih file jpg/jpeg/png</label>
                  <input type="file" name="foto">
                  <img src="{{ URL::to('/') }}/images/{{ $dt->foto }}" class="img-thumbnail" width="100">
                  <input type="hidden" name="hidden_image" value="{{ $dt->foto }}">
                </div>
               
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-flat btn-primary">Update</button>
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