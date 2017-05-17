@extends('admin')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data fasilitas_kamar</strong>
<a href="{{url('fasilitas_kamar/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>Fasilitas Kamar</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id Fasilitas Kamar</th>
             <th>Kode Kamar</th>
             <th>Fasilitas Kamar</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaFasilitasKamar as $fasilitas_kamar)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$fasilitas_kamar->id or 'id kosong'}}</td>
               <td>{{$fasilitas_kamar->kamar->kode_kamar or 'Kode Kamar kosong'}}</td>
                <td>{{$fasilitas_kamar->fasilitas->nama_fasilitas or 'Nama fasilitas kosong'}}</td>
                       <td>
               <div class="btn-group" role="group">
               <a href="{{url('fasilitas_kamar/edit/'.$fasilitas_kamar->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('fasilitas_kamar/lihat/'.$fasilitas_kamar->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('fasilitas_kamar/hapus/'.$fasilitas_kamar->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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