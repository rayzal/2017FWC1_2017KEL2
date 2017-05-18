<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}
	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Tangal Check In</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_check_in',null,['class'=>'form-control','placeholder'=>"Tanggal Check In"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Karyawan</label>
	<div class="col-sm-10">
	{!! Form::select('karyawan_id',$karyawan->lists('nama_karyawan','id'),null,['class'=>'form-control','id'=>'karyawan_id','placeholder'=>"Karyawan"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Tamu</label>
	<div class="col-sm-10">
	{!! Form::select('tamu_id',$tamu->lists('nama_tamu','id'),null,['class'=>'form-control','id'=>'tamu_id','placeholder'=>"Tamu"]) !!}
	</div>
	</div>

