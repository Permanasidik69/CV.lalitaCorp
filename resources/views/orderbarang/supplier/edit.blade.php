@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('Data-Supplier') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">

            <form role="form" method="POST" action="{{ url('Data-Supplier/'.$dt->id)}}" >
                @csrf {{ method_field('PUT') }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="nama">Nama Supplier</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Supplier" value="{{ $dt->nama }}" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="no_telp">Nomor Telepon</label>
                  <input type="number" name="no_telp" class="form-control" placeholder="Nomor Telepon" min="1" value="{{ $dt->no_telp }}" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                 <textarea class="form-control" name="alamat" rows="5" required>{{ $dt->alamat }}</textarea>
                </div>
               
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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