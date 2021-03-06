@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('check_in') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data check_in
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $check_in->id }}</td>
 	</tr>
 	<tr>
 		<td>Tanggal check_in </td>
 		<td>:</td>
 		<td>{{ $check_in->tgl_check_in }}</td>
 	</tr>
 	<tr>
 		<td>Nama Tamu </td>
 		<td>:</td>
 		<td>{{ $check_in->tamu->nama_tamu }}</td>
 	</tr>
 	<tr>
 		<td>Nama Karyawan </td>
 		<td>:</td>
 		<td>{{ $check_in->karyawan->nama_karyawan }}</td>
 	</tr>
 	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $check_in->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $check_in->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop