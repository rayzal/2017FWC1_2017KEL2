@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('transaksi') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data transaksi
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $transaksi->id }}</td>
 	</tr>
 	<tr>
 		<td>Kode Kamar </td>
 		<td>:</td>
 		<td>{{ $transaksi->kamar->kode_kamar }}</td>
 	</tr>

 	<tr>
 		<td>Lama Menginap </td>
 		<td>:</td>
 		<td>{{ $transaksi->lama_menginap }}</td>
 	</tr>
 	<tr>
 		<td>Tanggal Check In </td>
 		<td>:</td>
 		<td>{{ $transaksi->check_in->tgl_check_in }}</td>
 	</tr>
 	<tr>
 		<td>Total Harga</td>
 		<td>:</td>
 		<td>{{ $transaksi->total_harga }}</td>
 	</tr>
  	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $transaksi->created_at }}</td>
 	</tr>
 	<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $transaksi->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop