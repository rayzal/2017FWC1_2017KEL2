@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data kamar</strong>
<a href="{{url('kamar/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>kamar</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id kamar</th>
             <th>Kode kamar </th>
             <th>type kamar</th>
             <th>Harga</th>
             <th>Aksi</th>
         </tr>
      
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaKamar as $kamar)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$kamar->id or 'id kosong'}}</td>
              <td>{{$kamar->kode_kamar or 'kode_kamar kosong'}}</td>
               <td>{{$kamar->type_kamar or 'type_kamar kosong'}}</td>
                <td>{{$kamar->harga_kamar or 'harga kamar kosong'}}</td>
                 
                  
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('kamar/edit/'.$kamar->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('kamar/lihat/'.$kamar->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('kamar/hapus/'.$kamar->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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