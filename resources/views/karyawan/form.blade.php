<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label">Nama Karyawan</label>
	<div class="col-sm-10">
	{!! Form::text('nama_karyawan',null,['class'=>'form-control','placeholder'=>"Nama Karyawan"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat Karyawan</label>
	<div class="col-sm-10">
	{!! Form::text('alamat_karyawan',null,['class'=>'form-control','placeholder'=>"Alamat Karyawan"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No.Telpon Karyawan</label>
	<div class="col-sm-10">
	{!! Form::text('no_telepon_karyawan',null,['class'=>'form-control','placeholder'=>"No.Telpon Karyawan"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Email Karyawan</label>
	<div class="col-sm-10">
	{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email Karyawan"]) !!}
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
