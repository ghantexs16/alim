@section('content')
	<legend>Edit Kelompok</legend>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	{{Form::model($kelompok,array('url'=>route('admin.kelompok.update',['id_kel'=>$kelompok->id_kel]),'method'=>'PUT','class'=>'form-horizontal','files'=>true))}}
		<div class="form-group @if($errors->has('jenjang')) has-error @endif">
			<label for="" class="col-sm-2 control-label">ID Jenjang</label>
			<div class="col-sm-4">
				<select name="jenjang" id="jenjang" class="form-control">
					<option></option>
					@foreach($jenjang as $row)
						<option value="{{$row->id_jenjang}}" @if($kelompok->id_jenjang==$row->id_jenjang) selected='selected' @endif>{{$row->nama_jenjang}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group @if($errors->has('jk')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
			<div class="col-sm-4">
				<input type="radio" name="jk" value="L" @if($kelompok->jeniskelamin=='L') checked='checked' @endif> Laki - Laki
				<input type="radio" name="jk" value="P" @if($kelompok->jeniskelamin=='P') checked='checked' @endif> Perempuan
			</div>
		</div>

		<div class="form-group @if($errors->has('kecamatan')) has-error @endif">
			<label for="" class="col-sm-2 control-label">Kecamatan</label>
			<div class="col-sm-4">
				<select name="kecamatan" id="kecamatan" class="form-control">
					<option></option>
					<option value="PIN">Pinang</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-2 control-label">No. Grup</label>
			<div class="col-sm-4">
				<input type="number" name="grup" value="{{$kelompok->no_grup}}" class="form-control">
			</div>
		</div>

		<div class="form-group well">
			<label for="" class="col-sm-2 control-label"></label>
			<div class="col-sm-4">
				<button class="btn btn-primary">
					<i class="glyphicon glyphicon-saved"></i>
					Update
				</button>

				<a href="{{URL::to('admin/kelompok')}}" class="btn btn-default">Kembali</a>
			</div>
		</div>
	{{Form::close()}}
@stop