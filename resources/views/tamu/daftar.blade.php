
@extends('master')
{{-- @section('title')
@stopsection --}}
@section('content')


<!-- <div class="container" style="align-content: center;">
	<div class="row-fluid"> -->
		<div class="span12">			
			<form id="contact-form">
			<div class="project-title clearfix">

			<div style=" width:100%; text-align: left; margin-left: 50px; margin-bottom: 10px;">		
			
				{!! Form::open(['url'=>'tamu/simpan','class'=>'form-horizontal']) !!}
				@include('tamu.formdaftar')<br>
				
				<a href="{{url('tamuhome')}}">
				<button class="btn btn-primary">
					<i class="fa fa-save"></i>Simpan</button>
				</a>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
				</div>						
			</form>
		</div>
<!-- 	</div>
</div> -->

@stop