<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}
	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Tangal Check Out</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_check_out',null,['class'=>'form-control','placeholder'=>"Tanggal Check Out"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Id Transaksi</label>
	<div class="col-sm-10">
	{!! Form::select('transaksi_id',$transaksi->lists('id','id'),null,['class'=>'form-control','id'=>'transaksi_id','placeholder'=>"Transaksi"]) !!}
	</div>
	</div>

