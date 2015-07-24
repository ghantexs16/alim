@section('content')
		<legend>Konfirmasi</legend>

		Data ini mempunyai relasi dengan data Kelompok dan data anggota,
		jika anda menghapus data ini maka data kelompok dengan id jenjang {{$jenjang->id_jenjang}}
		juga akan ikut dihapus.

		<p>Apakah anda yakin???</p>

		<div class="well">
			{{Form::open(array('url'=>'admin/jenjang/'.$jenjang->id_jenjang))}}
				{{Form::hidden('_method','DELETE')}}
				<button class="btn btn-danger">
					<i class="glyphicon glyphicon-trash"></i>
					Hapus
				</button>

				<a href="{{URL::to('admin/jenjang')}}" class="btn btn-default"> Batal</a>
			{{Form::close()}}
		</div>
@stop