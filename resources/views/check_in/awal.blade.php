@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data check_in</strong>
<a href="{{url('check_in/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>check_in</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id check_in</th>
             <th>Nama Tamu </th>
             <th>Tanggal check_in </th>
             <th>Aksi</th>
         </tr>
       </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaCheck_in as $check_in)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$check_in->id or 'id kosong'}}</td>
             <td>{{$check_in->tamu->nama_tamu or 'Nama tamu kosong'}}</td>
              <td>{{$check_in->tgl_check_in or 'Tanggal check In kosong'}}</td>              
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('check_in/edit/'.$check_in->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('check_in/lihat/'.$check_in->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('check_in/hapus/'.$check_in->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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