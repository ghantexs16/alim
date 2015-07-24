@section('content')
	<legend>Tambah Agenda</legend>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	{{Form::open(array('url'=>'admin/agenda','method'=>'post','class'=>'form-horizontal','files'=>true))}}
		<div class="form-group @if($errors->has('judul')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Judul</label>
			<div class="col-sm-4">
				<input type="text" name="judul" value="{{Input::old('judul')}}" class="form-control">
				{{$errors->first('judul')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('deskripsi')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Deskripsi</label>
			<div class="col-sm-4">
				<textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
				{{$errors->first('deskripsi')}}
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-2 control-label">Gambar</label>
			<div class="col-sm-4">
				<input type="file" name="gambar">
			</div>
		</div>

		<div class="form-group well">
			<label for="" class="col-sm-2 control-label"></label>
			<div class="col-sm-4">
				<button class="btn btn-primary">
					<i class="glyphicon glyphicon-saved"></i>
					Simpan
				</button>

				<a href="{{URL::to('admin/agenda')}}" class="btn btn-default">Kembali</a>
			</div>
		</div>
	{{Form::close()}}
@stop