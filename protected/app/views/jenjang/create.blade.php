@section('content')
	<legend>Tambah Jenjang</legend>
	{{Form::open(array('url'=>'admin/jenjang','method'=>'post','class'=>'form-horizontal'))}}
		<div class="form-group @if($errors->has('id')) has-error @endif">
			<label for="" class="col-sm-2 control-label">ID Jenjang</label>
			<div class="col-sm-4">
				<input type="text" name="id" value="{{Input::old('id')}}" class="form-control">
				{{$errors->first('id')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('id')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Nama Jenjang</label>
			<div class="col-sm-4">
				<input type="text" name="nama" value="{{Input::old('nama')}}" class="form-control">
				{{$errors->first('nama')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('keterangan')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Keterangan</label>
			<div class="col-sm-4">
				<input type="text" name="keterangan" value="{{Input::old('keterangan')}}" class="form-control">
				{{$errors->first('keterangan')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('status')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-4">
				<select name="status" id="status" class="form-control">
					<option></option>
					<option value="aktif" @if($errors->has('status')=='aktif') selected='selected' @endif>Aktif</option>
					<option value="tidak aktif" @if($errors->has('status')=='tidak aktif') selected='selected' @endif>Tidak Aktif</option>
				</select>
				{{$errors->first('status')}}
			</div>
		</div>

		<div class="form-group well">
			<label for="" class="col-sm-2 control-label"></label>
			<div class="col-sm-4">
				<button class="btn btn-primary">
					<i class="glyphicon glyphicon-saved"></i>
					Simpan
				</button>

				<a href="{{URL::to('admin/jenjang')}}" class="btn btn-default">Kembali</a>
			</div>
		</div>
	{{Form::close()}}
@stop