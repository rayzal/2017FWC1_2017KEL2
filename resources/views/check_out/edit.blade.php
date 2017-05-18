@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('check_out')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data check_out</strong>
 </div>
 {!! Form::model($check_out,['url'=>'check_out/edit/'.$check_out->id,'class'=>'form-horizontal']) !!}
@include('check_out.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop