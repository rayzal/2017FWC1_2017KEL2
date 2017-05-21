<style type="text/css">
	
.form-group{
			padding-top: 10px;
			padding-right: 100px;
	}

	</style>
<div class="project-title clearfix">
<span></span>
<h3>Registrasi Tamu</h3>
<span></span>
</div>

<div>
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
</div>

<!-- <style type="text/css">
	
 .contact {
    background: #f2b632;
}
.contact h1, .contact h2, .contact h3, .contact h4, .contact h5, .contact h6, .contact .section .title > p, .contact .social > li > a {
    color: #252839;
}
.contact textarea, .contact input[type="text"], .contact input[type="email"] {
    padding: 10px;
    line-height: 20px;
    height: auto;
}
.contact textarea {
    height: 120px;
}
.contacts, .contact .social {
    color: #fff;
    list-style: none;
    margin-left: 10px;
}
.contacts > li {
    margin-top: 15px;
}
.contacts > li > a {
    color: #fff;
}
.contact-info {
    margin-top:10px;
    margin-bottom:10px;
}
.contact-info p{
     font-weight:normal;
}
.contact-info .icon {
    margin:10px auto;
    font-size:30px;
}
.map-wrapper {
    position:relative;
    height:500px;
}
.map-canvas {
    position:absolute;
    margin-bottom:20px;
    width:100%;
    height:500px;
    color: #29383F;
    position:absolute;
    left:0;
    top:0;
    right:0;
}
.contact .social {
    display: inline-block;
    margin-left:0;
}
.contact .social li {
    line-height: 32px;
    padding:10px 10px;
    font-family:'Porta';
    font-size: 50px;
    transition: margin 0.4s;
    -webkit-transition: margin 0.4s;
}
.contact .social li a {
    color:#fff;
}
.contact .social li a:hover {
    color:#252839;
}
.contact-form {
    background:#fff;
    background: rgba(255, 255, 255, 0.9);
    z-index:110;
    position:relative;
    margin-top:-25px;
    padding:20px;
}
.contact-form h3 {
    color:#838589;
    padding-bottom:20px;
}
.message-btn {
    border:1px solid #747C89;
    color:#747C89;
    background-color:transparent;
    padding:15px 30px;
    font-size:17px;
}
.message-btn:hover {
    background-color:#f2b632;
}
.contact-info {
    text-align:center;
    font-size:22px;
}
.info-mail {
    border:1px solid white;
    width:60%;
    margin:0 auto;
    padding:15px;
    color:#252839;
}
.black {
    color:#252839;
}

</style>

<form id="contact-form">
	<div class="control-group">
		<div class="controls">
			{!! Form::text('nama_tamu',null,['class'=>'form-control','placeholder'=>"Nama tamu"]) !!}
			<div class="error left-align" id="err-name">Nama Tamu</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::text('no_identitas_tamu',null,['class'=>'form-control','placeholder'=>"No Identitas tamu"]) !!}
			<div class="error left-align" id="err-email">No Identitas tamu.</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::text('alamat_tamu',null,['class'=>'form-control','placeholder'=>"Alamat tamu"]) !!}
			<div class="error left-align" id="err-comment">Alamat tamu.</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::text('no_telepon_tamu',null,['class'=>'form-control','placeholder'=>"No.Telpon tamu"]) !!}
			<div class="error left-align" id="err-comment">No.Telpon tamu.</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email tamu"]) !!}
			<div class="error left-align" id="err-comment">Email tamu.</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
			<div class="error left-align" id="err-comment">Username.</div>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
			<div class="error left-align" id="err-comment">Password</div>
		</div>
	</div>
	<div> class="control-group">
		<div class="controls">
			<button id="send-mail" class="message-btn">Kirim Pesan</button>
		</div>
	</div>
</form> -->