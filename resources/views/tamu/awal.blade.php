@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data tamu</strong>
<a href="{{url('tamu/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>tamu</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id Tamu</th>
             <th>Nama Tamu </th>
             <th>No Identitas Tamu </th>
             <th>Alamat Tamu</th>
             <th>No.Telp Tamu </th>
             <th>Email</th>
             <th>Aksi</th>
         </tr>
      
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaTamu as $tamu)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$tamu->id or 'id kosong'}}</td>
              <td>{{$tamu->nama_tamu or 'nama_tamu kosong'}}</td>
              <td>{{$tamu->no_identitas_tamu or 'no_identitas_tamu kosong'}}</td>
               <td>{{$tamu->alamat_tamu or 'alamat_tamu kosong'}}</td>
                <td>{{$tamu->no_telepon_tamu or 'no_telepon_tamu kosong'}}</td>
                 <td>{{$tamu->email or 'email kosong'}}</td>
                  
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('tamu/edit/'.$tamu->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('tamu/lihat/'.$tamu->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('tamu/hapus/'.$tamu->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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