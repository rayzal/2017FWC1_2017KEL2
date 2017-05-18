<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Lama Menginap</label>
	<div class="col-sm-10">
	{!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Total Harga</label>
	<div class="col-sm-10">
	{!! Form::text('total_harga',null,['class'=>'form-control','placeholder'=>"Total Kamar"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal check in</label>
	<div class="col-sm-10">
	{!! Form::select('check_in_id',$check_in->lists('tgl_check_in','id'),null,['class'=>'form-control','id'=>'check_in_id','placeholder'=>"Tanggal Check In"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Kamar</label>
	<div class="col-sm-10">
	{!! Form::select('kamar_id',$kamar->lists('kode_kamar','id'),null,['class'=>'form-control','id'=>'kamar_id','placeholder'=>"Kamar"]) !!}
	</div>
	</div>


