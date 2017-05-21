<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Kode Kamar</label>
	<div class="col-sm-10">
	{!! Form::text('kode_kamar',null,['class'=>'form-control','placeholder'=>"Kode Kamar"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Type Kamar</label>
	<div class="col-sm-10">
	{!! Form::text('type_kamar',null,['class'=>'form-control','placeholder'=>"Type Kamar"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Harga Kamar</label>
	<div class="col-sm-10">
	{!! Form::text('harga_kamar',null,['class'=>'form-control','placeholder'=>"Harga Kamar"]) !!}
	</div>
	</div>

