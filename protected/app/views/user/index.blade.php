@extends('template.default')

@section('content')

	<a href="{{URL::to('admin/users/create')}}" class="btn btn-primary">
		<i class="glyphicon glyphicon-plus"></i>
		Tambah User
	</a>

	<hr>

	@if(Session::has('pesan'))
		{{Session::get('pesan')}}
	@endif

	<table class="table table-striped table-bordered" id="data">
		<thead>
			<tr>
				<th>No.</th>
				<th>Username</th>
				<th>ID Anggota</th>
				<th>Status</th>
				<th>Activated At</th>
				<th>Last Login</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0;?>
			@foreach($user as $row)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$row->username}}</td>
					<td>{{$row->id_ang}}</td>
					<td>{{$row->activated}}</td>
					<td>{{$row->activated_at}}</td>
					<td>{{$row->last_login}}</td>
					<td>
						{{Form::open(array('url'=>'admin/users/'.$row->id))}}
							{{Form::hidden('_method','DELETE')}}
							<button class="btn btn-danger">
								<i class="glyphicon glyphicon-trash"></i>
							</button>
						{{Form::close()}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
