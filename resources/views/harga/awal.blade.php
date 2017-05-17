@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data harga</strong>
<a href="{{url('harga/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>harga</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id_Harga</th>
             <th>Harga harga</th>
             <th>Hari</th>
            
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($data as $harga)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$harga->id or 'id kosong'}}</td>
             <td>{{$harga->harga_kamar or 'harga Kamar kosong'}}</td>
             <td>{{$harga->hari or 'hari kosong'}}</td>
       
                
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('harga/edit/'.$harga->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('harga/lihat/'.$harga->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('harga/hapus/'.$harga->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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