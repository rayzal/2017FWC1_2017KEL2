@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data Fasilitas</strong>
<a href="{{url('fasilitas/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>Fasilitas</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id_Fasilitas</th>
             <th>Nama Fasilitas</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $fasilitas)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$fasilitas->id or 'id kosong'}}</td>
              <td>{{$fasilitas->nama_fasilitas or 'nama  fasilitas kosong'}}</td>
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('fasilitas/edit/'.$fasilitas->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('fasilitas/lihat/'.$fasilitas->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('fasilitas/hapus/'.$fasilitas->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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