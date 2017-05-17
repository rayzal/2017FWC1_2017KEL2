@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data check_out</strong>
<a href="{{url('check_out/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>check_out</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id check_out</th>
             <th>Nama Tamu</th>
             <th>Tanggal check_out </th>
             <th>Aksi</th>
         </tr>
       </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaCheck_out as $check_out)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$check_out->id or 'id kosong'}}</td>
             <td>{{$check_out->transaksi->check_in->tamu->nama_tamu or 'Nama Tamu kosong'}}</td>
              <td>{{$check_out->tgl_check_out or 'Tanggal check out kosong'}}</td>              
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('check_out/edit/'.$check_out->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('check_out/lihat/'.$check_out->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('check_out/hapus/'.$check_out->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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