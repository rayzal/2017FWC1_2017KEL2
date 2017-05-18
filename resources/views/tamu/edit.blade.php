@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('tamu')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data tamu</strong>
 </div>
 {!! Form::model($tamu,['url'=>'tamu/edit/'.$tamu->id,'class'=>'form-horizontal']) !!}
@include('tamu.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop