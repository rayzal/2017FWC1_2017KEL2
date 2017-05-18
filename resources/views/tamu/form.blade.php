<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama tamu</label>
	<div class="col-sm-10">
	{!! Form::text('nama_tamu',null,['class'=>'form-control','placeholder'=>"Nama tamu"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No Identitas tamu</label>
	<div class="col-sm-10">
	{!! Form::text('no_identitas_tamu',null,['class'=>'form-control','placeholder'=>"No Identitas tamu"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat tamu</label>
	<div class="col-sm-10">
	{!! Form::text('alamat_tamu',null,['class'=>'form-control','placeholder'=>"Alamat tamu"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No.Telpon tamu</label>
	<div class="col-sm-10">
	{!! Form::text('no_telepon_tamu',null,['class'=>'form-control','placeholder'=>"No.Telpon tamu"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Email tamu</label>
	<div class="col-sm-10">
	{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email tamu"]) !!}
	</div>
	</div>
<div class="form-group">
<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
	</div>
</div>
