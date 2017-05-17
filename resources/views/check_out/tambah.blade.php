@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')

<div class="panel panel-primary">
<div class="panel-heading">

 <strong><a href="{{url('check_out')}}">
   <i style="color:white;" class="fa text-default fa-chevron-left"></i>
 </a>Tambah data check_out</strong>
 </div>
 {!! Form::open(['url'=>'check_out/simpan','class'=>'form-horizontal']) !!}
@include('check_out.form')
<div style=" width:100%; text-align: right;">
<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop