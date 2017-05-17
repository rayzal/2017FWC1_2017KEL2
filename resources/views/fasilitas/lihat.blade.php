@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('fasilitas') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data fasilitas
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $fasilitas->id }}</td>
 	</tr>
 	<tr>
 		<td>Nama Fasilitas</td>
 		<td>:</td>
 		<td>{{ $fasilitas->nama_fasilitas }}</td>
 	</tr>
 	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $fasilitas->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $fasilitas->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop