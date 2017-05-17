@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data karyawan</strong>
<a href="{{url('karyawan/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>karyawan</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id Karyawan</th>
             <th>Nama Karyawan </th>
             <th>Alamat Karyawan</th>
             <th>No.Telp Karyawan </th>
             <th>Email</th>
             <th>Aksi</th>
         </tr>
      
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaKaryawan as $karyawan)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$karyawan->id or 'id kosong'}}</td>
              <td>{{$karyawan->nama_karyawan or 'nama_karyawan kosong'}}</td>
               <td>{{$karyawan->alamat_karyawan or 'alamat_karyawan kosong'}}</td>
                <td>{{$karyawan->no_telepon_karyawan or 'no_telepon_karyawan kosong'}}</td>
                 <td>{{$karyawan->email or 'email kosong'}}</td>
                  
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('karyawan/edit/'.$karyawan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('karyawan/lihat/'.$karyawan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('karyawan/hapus/'.$karyawan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                   <i class="fa fa-remove"></i>
               </a>
               </div>
               </td>

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop