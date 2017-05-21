@extends('admin')
	{{-- @section('title')
	@stopsection --}}
@section('content')

<div class="panel panel-primary">
<div class="panel-heading">

 <strong><a href="{{url('tamu')}}">
   <i style="color:white;" class="fa text-default fa-chevron-left"></i>
 </a>Tambah data tamu</strong>
 </div>
 {!! Form::open(['url'=>'tamu/simpan','class'=>'form-horizontal']) !!}
@include('tamu.form')
<div style=" width:29%; text-align: right;">
<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop
