@extends('admin')
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('fasilitas_kamar') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Fasilitas Kamar
 </strong>
 </div>
 <table class="table">
 	<tr>
 		<td>Kode Kamar</td>
 		<td>:</td>
 		<td>{{$fasilitas_kamar->kamar->kode_kamar}}</td>
 	</tr>
 	<tr>
 		<td>Fasilitas Kamar</td>
 		<td>:</td>
 		<td>{{$fasilitas_kamar->fasilitas->nama_fasilitas}}</td>
 	</tr>
 	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$fasilitas_kamar->created_at}}</td>
 	</tr>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$fasilitas_kamar->updated_at}}</td>
 	</tr>

 </table>
 </div>
@stop