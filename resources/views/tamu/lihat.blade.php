@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('tamu') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data tamu
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $tamu->id }}</td>
 	</tr>
 	<tr>
 		<td>Nama tamu </td>
 		<td>:</td>
 		<td>{{ $tamu->nama_tamu }}</td>
 	</tr>
 		<tr>
 		<td>No Identitas Tamu </td>
 		<td>:</td>
 		<td>{{ $tamu->no_identitas_tamu }}</td>
 	</tr>
 	<tr>
 		<td>Alamat tamu</td>
 		<td>:</td>
 		<td>{{ $tamu->alamat_tamu }}</td>
 	</tr>
 	<tr>
 		<td>No.Telp tamu</td>
 		<td>:</td>
 		<td>{{ $tamu->no_telepon_tamu }}</td>
 	</tr>
 	<tr>
 		<td>Email tamu</td>
 		<td>:</td>
 		<td>{{ $tamu->email }}</td>
 	</tr>
 	 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td>{{$tamu->pengguna->username}}</td>
 	</tr>
 	<tr>
 	 	<td>Password</td>
 		<td>:</td>
 		<td>{{$tamu->pengguna->password}}</td>
 	</tr>
	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $tamu->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $tamu->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop