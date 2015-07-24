@section('content')
	<legend>Data Agenda</legend>

	<a href="{{URL::to('admin/agenda/create')}}" class="btn btn-primary">
		<i class="glyphicon glyphicon-plus"></i>
		Tambah Agenda
	</a>

	<hr>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	<table class="table" id="data">
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Tanggal</th>
				<th>Gambar</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0;?>
			@foreach($agenda as $row)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$row->judul}}</td>
					<td>{{$row->deskripsi}}</td>
					<td>{{date('d-m-Y',strtotime($row->tanggal))}}</td>
					<td>
						{{HTML::image('uploads/agenda/'.$row->gambar,'',array('style'=>'width:100px;'))}}
					</td>
					<td>
						<a href="{{URL::to('admin/agenda/'.$row->id.'/edit')}}" class="btn btn-warning">
							<i class="glyphicon glyphicon-edit"></i>
							Edit
						</a>
					</td>
					<td>
						{{Form::open(array('url'=>'admin/agenda/'.$row->id))}}
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