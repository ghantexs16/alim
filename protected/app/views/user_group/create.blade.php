@extends('template.default')

@section('content')
  <legend>Tambah Data Group</legend>

  {{Form::open(array('url'=>'sis_admin/users_group','method'=>'post','class'=>'form-horizontal'))}}
    <div class="form-group">
      {{Form::label('Users','Nama Users',array('class'=>'col-sm-2 control-label'))}}
      <div class='col-sm-4'>
        <select name="user" class="form-control">
          <option></option>
          @foreach($user as $row)
            <option value="{{$row->id}}">{{$row->nama_depan}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group">
      {{Form::label('Groups','Nama Groups',array('class'=>'col-sm-2 control-label'))}}
      <div class='col-sm-4'>
        <select name="group" class="form-control">
          <option></option>
          @foreach($group as $gr)
            <option value="{{$gr->id}}">{{$gr->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group well">
      {{Form::label('','',array('class'=>'col-sm-2 control-label'))}}
      <div class="col-sm-4">
        <button class="btn btn-primary">
          <i class="glyphicon glyphicon-saved"></i>
          Simpan
        </button>

        <a href="{{URL::to('sis_admin/users_group')}}" class="btn btn-success">
          Kembali
        </a>
      </div>
    </div>
  {{Form::close()}}
@stop
