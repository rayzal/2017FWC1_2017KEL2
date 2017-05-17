@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('harga') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data harga
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $harga->id }}</td>
 	</tr>
 	<tr>
 		<td>Harga Kamar</td>
 		<td>:</td>
 		<td>{{ $harga->harga_kamar }}</td>
 	</tr>
 	<tr>
 		<td>harga</td>
 		<td>:</td>
 		<td>{{ $harga->harga }}</td>
 	</tr>
	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $harga->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $harga->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop