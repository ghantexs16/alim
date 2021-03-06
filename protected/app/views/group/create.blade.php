@extends('template.default')

@section('content')
  {{Form::open(array('url'=>'sis_admin/groups','method'=>'POST','class'=>'form-horizontal'))}}
    {{Bootstrap::horizontal('col-sm-4','col-sm-2')
      ->text('kode','Kode Group',Input::old('kode'),$errors)}}

    {{Bootstrap::horizontal('col-sm-4','col-sm-2')
      ->text('nama','Nama Groups',Input::old('nama'),$errors)}}

      <div class="form-group well">
        {{Form::label('','',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-4">
          <button class="btn btn-primary">
            <i class="glyphicon glyphicon-saved"></i>
            Simpan
          </button>

          <a href="{{URL::to('sis_admin/groups')}}" class="btn btn-success">
            Kembali
          </a>
        </div>
      </div>
  {{Form::close()}}
@stop
