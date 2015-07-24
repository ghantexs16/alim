@section('content')
	<legend>Data Jenjang</legend>

	<a href="{{URL::to('admin/jenjang/create')}}" class="btn btn-primary">
		<i class="glyphicon glyphicon-plus"></i>
		Tambah Jenjang
	</a>

	<hr>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	<table class="table table-striped" id="data">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Jenjang</th>
				<th>Nama Jenjang</th>
				<th>Keterangan</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0;?>
			@foreach($jenjang as $row)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$row->id_jenjang}}</td>
					<td>{{$row->nama_jenjang}}</td>
					<td>{{$row->keterangan}}</td>
					<td>{{$row->status}}</td>
					<td>
						<a href="{{URL::to('admin/jenjang/'.$row->id_jenjang.'/edit')}}" class="btn btn-warning">
							<i class="glyphicon glyphicon-edit"></i>
							Edit
						</a>
					</td>
					<td>
						{{Form::open(array('url'=>'admin/jenjang/'.$row->id_jenjang))}}
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