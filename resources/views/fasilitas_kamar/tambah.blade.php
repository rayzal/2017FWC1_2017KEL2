
@extends('admin')
@section('content')
<div class="panel panel-primary">
<div class="panel-heading">

 <strong><a href="{{url('fasilitas_kamar')}}">
   <i style="color:white;" class="fa text-default fa-chevron-left"></i>
 </a>Tambah data fasilitas_kamar</strong>
 </div>
 {!! Form::open(['url'=>'fasilitas_kamar/simpan','class'=>'form-horizontal']) !!}
@include('fasilitas_kamar.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop