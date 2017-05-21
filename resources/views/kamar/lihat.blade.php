@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('kamar') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data kamar
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $kamar->id }}</td>
 	</tr>
 	<tr>
 		<td>Kode kamar </td>
 		<td>:</td>
 		<td>{{ $kamar->kode_kamar }}</td>
 	</tr>
 	<tr>
 		<td>Type kamar</td>
 		<td>:</td>
 		<td>{{ $kamar->type_kamar }}</td>
 	</tr>
 	<tr>
 		<td>Harga kamar</td>
 		<td>:</td>
 		<td>{{ $kamar->harga_kamar }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $kamar->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $kamar->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop