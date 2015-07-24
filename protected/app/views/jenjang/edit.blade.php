@section('content')
	<legend>Update Jenjang</legend>
	{{Form::model($jenjang,array('url'=>route('admin.jenjang.update',['id_jenjang'=>$jenjang->id_jenjang]),'method'=>'PUT','class'=>'form-horizontal','files'=>true))}}
		<div class="form-group @if($errors->has('id')) has-error @endif">
			<label for="" class="col-sm-2 control-label">ID Jenjang</label>
			<div class="col-sm-4">
				<input type="text" name="id" value="{{$jenjang->id_jenjang}}" readonly="readonly" class="form-control">
				{{$errors->first('id')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('id')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Nama Jenjang</label>
			<div class="col-sm-4">
				<input type="text" name="nama" value="{{$jenjang->nama_jenjang}}" class="form-control">
				{{$errors->first('nama')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('keterangan')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Keterangan</label>
			<div class="col-sm-4">
				<input type="text" name="keterangan" value="{{$jenjang->keterangan}}" class="form-control">
				{{$errors->first('keterangan')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('status')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-4">
				<select name="status" id="status" class="form-control">
					<option></option>
					<option value="aktif" @if($jenjang->status=='aktif') selected='selected' @endif>Aktif</option>
					<option value="tidak aktif" @if($jenjang->status=='tidak aktif') selected='selected' @endif>Tidak Aktif</option>
				</select>
				{{$errors->first('status')}}
			</div>
		</div>

		<div class="form-group well">
			<label for="" class="col-sm-2 control-label"></label>
			<div class="col-sm-4">
				<button class="btn btn-primary">
					<i class="glyphicon glyphicon-saved"></i>
					Update
				</button>

				<a href="{{URL::to('admin/jenjang')}}" class="btn btn-default">Kembali</a>
			</div>
		</div>
	{{Form::close()}}
@stop