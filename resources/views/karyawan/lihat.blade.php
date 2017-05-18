@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('karyawan') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data karyawan
 </strong>
 </div>
<table class="table">
<tr>
 		<td>ID</td>
 		<td>:</td>
 		<td>{{ $karyawan->id }}</td>
 	</tr>
 	<tr>
 		<td>Nama karyawan </td>
 		<td>:</td>
 		<td>{{ $karyawan->nama_karyawan }}</td>
 	</tr>
 	<tr>
 		<td>Alamat karyawan</td>
 		<td>:</td>
 		<td>{{ $karyawan->alamat_karyawan }}</td>
 	</tr>
 	<tr>
 		<td>No.Telp karyawan</td>
 		<td>:</td>
 		<td>{{ $karyawan->no_telepon_karyawan }}</td>
 	</tr>
 	<tr>
 		<td>Email karyawan</td>
 		<td>:</td>
 		<td>{{ $karyawan->email }}</td>
 	</tr>
 	 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td>{{$karyawan->pengguna->username}}</td>
 	</tr>
 	<tr>
 	 	<td>Password</td>
 		<td>:</td>
 		<td>{{$karyawan->pengguna->password}}</td>
 	</tr>
	<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $karyawan->created_at }}</td>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{ $karyawan->updated_at }}</td>
 	</tr>
 </table>
 </div>
@stop