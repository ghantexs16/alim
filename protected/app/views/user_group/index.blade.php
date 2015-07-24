@extends('template.default')

@section('content')
  <legend>Data Group User</legend>

  <a href="{{URL::to('sis_admin/users_group/create')}}" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah User Group
  </a>

  <hr>

  @if(Session::has('pesan'))
    {{Session::get('pesan')}}
  @endif

  <table class="table table-striped table-bordered" id="data">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Level</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php $no=0;?>
      @foreach($user as $row)
        <?php $no++;?>
        <tr>
          <td>{{$no}}</td>
          <td>{{$row->nama_depan}}</td>
          <td>{{$row->email}}</td>
          <td>
            <?php
            $group=Group::find($row->group_id);?>
            {{$group->name}}
          </td>
          <td>
            {{Form::open(array('url'=>'sis_admin/users_group/'.$row->user_id))}}
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
