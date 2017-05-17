<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 20px;
			
	}

	</style>

<div class="form-group">
	<label class="col-sm-2 control-label" id="kamar_id">Mahasiswa</label>
	<div class="col-sm-10">
	{!! Form::select('kamar_id',$kamar->listKamar(),null,['class'=>'form-control','id'=>'kamar_id','placeholder'=>"kamar"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="fasilitas_id">Fasilitas</label>
	<div class="col-sm-10">
	{!! Form::select('fasilitas_id',$fasilitas->listFasilitas(),null,['class'=>'form-control','id'=>'fasilitas_id','placeholder'=>"Fasilitas"]) !!}
	</div>
	</div>
