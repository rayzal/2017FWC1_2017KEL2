@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('check_in')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data check_in</strong>
 </div>
 {!! Form::model($check_in,['url'=>'check_in/edit/'.$check_in->id,'class'=>'form-horizontal']) !!}
@include('check_in.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop