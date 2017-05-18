@extends('admin')
{{-- @section('title')
@stopsection --}}
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data transaksi</strong>
<a href="{{url('transaksi/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>transaksi</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Id transaksi</th>
             <th>Kode Kamar</th>'
             <th>Tanggal Check In</th>''
             <th>Lama Menginap </th>
             <th>Total Harga</th>
             <th>Aksi</th>
         </tr>
      
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaTransaksi as $transaksi)
         <tr>
             <td>{{$x++}}</td>
             <td>{{$transaksi->id or 'id kosong'}}</td>
             <td>{{$transaksi->kamar->kode_kamar or 'Kode Kamar kosong'}}</td>
             <td>{{$transaksi->check_in->tgl_check_in or 'Tanggal Check In kosong'}}</td>
              <td>{{$transaksi->lama_menginap or 'Lama menginap kosong'}}</td>
               <td>{{$transaksi->total_harga or 'total harga kosong'}}</td>                
                  
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('transaksi/edit/'.$transaksi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('transaksi/lihat/'.$transaksi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('transaksi/hapus/'.$transaksi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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