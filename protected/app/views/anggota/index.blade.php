@section('content')
	<legend>Data Anggota</legend>

	<a href="{{URL::to('admin/anggota/create')}}" class="btn btn-primary">
		<i class="glyphicon glyphicon-plus"></i>
		Tambah Anggota
	</a>

	<hr>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	<table class="table" id="data">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Anggota</th>
				<th>Nama Anggota</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>JK</th>
				<th>Murobbi</th>
				<th>Alamat</th>
				<th>No. HP</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0;?>
			@foreach($anggota as $row)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$row->id_ang}}</td>
					<td>{{$row->nama_ang}}</td>
					<td>{{$row->tempat_lahir.', '.$row->tanggal_lahir}}</td>
					<td>{{$row->jeniskelamin}}</td>
					<td>{{$row->murobbi}}</td>
					<td>{{$row->alamat}}</td>
					<td>{{$row->no_hp}}</td>
					<td>
						<a href="{{URL::to('admin/anggota/'.$row->id_ang)}}" class="btn btn-info">
							<i class="glyphicon glyphicon-list-alt"></i>
							Detail
						</a>
					</td>
					<td>
						<a href="{{URL::to('admin/anggota/'.$row->id_ang.'/edit')}}" class="btn btn-warning">
							<i class="glyphicon glyphicon-edit"></i>
							Edit
						</a>
					</td>
					<td>
						{{Form::open(array('url'=>'admin/anggota/'.$row->id_ang))}}
							{{Form::hidden('_method','DELETE')}}
							<button class="btn btn-danger">
								<i class="glyphicon glyphicon-trash"></i>
								Hapus
							</button>
						{{Form::close()}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop