@section('content')
	<legend>Edit Data Anggota</legend>

	{{Form::model($anggota,array('url'=>route('admin.anggota.update',['id_ang'=>$anggota->id_ang]),'method'=>'PUT','class'=>'form-horizontal','files'=>true))}}
		<div class="form-group @if($errors->has('id')) has-error @endif">
			<label for="" class="col-sm-3 control-label">ID Anggota</label>
			<div class="col-sm-4">
				<input type="text" name="id" value="{{$anggota->id_ang}}" readonly="readonly" class="form-control">
				{{$errors->first('id')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('nama')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Nama Anggota</label>
			<div class="col-sm-4">
				<input type="text" name="nama" value="{{$anggota->nama_ang}}" class="form-control">
				{{$errors->first('nama')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('jk')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
			<div class="col-sm-4">
				<input type="radio" name="jk" value="L" @if($anggota->jeniskelamin=='L') checked='checked' @endif> Laki - Laki
				<input type="radio" name="jk" value="P" @if($anggota->jeniskelamin=='P') checked='checked' @endif> Perempuan
			</div>
			{{$errors->first('jk')}}
		</div>

		<div class="form-group @if($errors->has('tempat')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Tempat Lahir</label>
			<div class="col-sm-4">
				<input type="text" name="tempat" value="{{$anggota->tempat_lahir}}" class="form-control">
				{{$errors->first('tempat')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('tanggal')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
			<div class="col-sm-4">
				<input type="date" name="tanggal" value="{{$anggota->tanggal_lahir}}" class="form-control">
				{{$errors->first('tanggal')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('murrobi')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Murobbi</label>
			<div class="col-sm-4">
				<input type="text" name="murrobi" value="{{$anggota->murobbi}}" class="form-control">
				{{$errors->first('murrobi')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('alamat')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-4">
				<input type="text" name="alamat" value="{{$anggota->alamat}}" class="form-control">
				{{$errors->first('alamat')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('nama')) has-error @endif">
			<label for="" class="col-sm-3 control-label">No. HP</label>
			<div class="col-sm-4">
				<input type="text" name="hp" value="{{$anggota->no_hp}}" class="form-control">
				{{$errors->first('hp')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('pekerjaan')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Pekerjaan</label>
			<div class="col-sm-4">
				<input type="text" name="pekerjaan" value="{{$anggota->pekerjaan}}" class="form-control">
				{{$errors->first('pekerjaan')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('pendidikan')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Pendidikan Terakhir</label>
			<div class="col-sm-4">
				<input type="text" name="pendidikan" value="{{$anggota->pendidikan_terakhir}}" class="form-control">
				{{$errors->first('pendidikan')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('hobby')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Hobby</label>
			<div class="col-sm-4">
				<input type="text" name="hobby" value="{{$anggota->hobby}}" class="form-control">
				{{$errors->first('hobby')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('kafaah')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Kafaah</label>
			<div class="col-sm-4">
				<input type="text" name="kafaah" value="{{$anggota->kafaah}}" class="form-control">
				{{$errors->first('kafaah')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('pasangan')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Nama Pasangan</label>
			<div class="col-sm-4">
				<input type="text" name="pasangan" value="{{$anggota->nama_pasangan}}" class="form-control">
				{{$errors->first('pasangan')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('anak')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Jumlah Anak</label>
			<div class="col-sm-4">
				<input type="number" name="anak" value="{{$anggota->jumlah_anak}}" class="form-control">
				{{$errors->first('anak')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('masuk')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Tanggal Masuk</label>
			<div class="col-sm-4">
				<input type="date" name="masuk" value="{{$anggota->tgl_masuk}}" class="form-control">
				{{$errors->first('masuk')}}
			</div>
		</div>

		<div class="form-group @if($errors->has('kelompok')) has-error @endif">
			<label for="" class="col-sm-3 control-label">Kelompok</label>
			<div class="col-sm-4">
				<select name="kelompok" id="kelompok" class="form-control">
					<option value=""></option>
					@foreach($kelompok as $kel)
						<option value="{{$kel->id_kel}}" @if($anggota->id_kel==$kel->id_kel) selected='selected' @endif>{{$kel->id_kel}}</option>
					@endforeach
				</select>
				{{$errors->first('kelompok')}}
			</div>
		</div>

		<div class="form-group well">
			<label for="" class="col-sm-3 control-label"></label>
			<div class="col-sm-4">
				<button class="btn btn-primary">
					<i class="glyphicon glyphicon-saved"></i>
					Simpan
				</button>

				<a href="{{URL::to('admin/anggota')}}" class="btn btn-default">Kembali</a>
			</div>
		</div>
	{{Form::close()}}
@stop