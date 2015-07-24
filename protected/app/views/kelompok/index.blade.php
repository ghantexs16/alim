@section('content')
	<legend>Data Kelompok</legend>

	<a href="{{URL::to('admin/kelompok/create')}}" class="btn btn-primary">	
		<i class="glyphicon glyphicon-plus"></i>
		Tambah Kelompok
	</a>

	<hr>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	<table class="table table-striped" id="data">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Kelompok</th>
				<th>Jenjang</th>
				<th>Jenis Kelamin</th>
				<th>Kecamatan</th>
				<th>No. Grup</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0;?>
			@foreach($kelompok as $row)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$row->id_kel}}</td>
					<td>{{$row->id_jenjang}}</td>
					<td>{{$row->jeniskelamin}}</td>
					<td>{{$row->kecamatan}}</td>
					<td>{{$row->no_grup}}</td>
					<td>
						<a href="{{URL::to('admin/kelompok/'.$row->id_kel.'/edit')}}" class="btn btn-warning">
							<i class="glyphicon glyphicon-edit"></i>
							Edit
						</a>
					</td>
					<td>
						{{Form::open(array('url'=>'admin/kelompok/'.$row->id_kel))}}
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