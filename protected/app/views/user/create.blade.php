@extends('template.default')

@section('content')

  <legend>Tambah Data User</legend>

  <div class="row">
    <div class="col-sm-8">
      {{Form::open(array('url'=>'admin/users','method'=>'post','class'=>'form-horizontal','files'=>true))}}
       <div class="form-group"> 
        <label for="" class="col-sm-3 control-label">ID Anggota</label>
        <div class="col-sm-7">
          <select name="anggota" id="anggota" class="form-control">
            <option></option>
            @foreach($anggota as $row)
              <option value="{{$row->id_ang}}">{{$row->id_ang}}</option>
            @endforeach
          </select>
        </div>
       </div>

        {{Bootstrap::horizontal('col-sm-7','col-sm-3')
          ->text('username','Username',Input::old('username'),$errors)}}

        <div class="form-group @if($errors->has('email')) has-error @endif"> 
          <label for="" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="email" value="{{Input::old('email')}}" class="form-control">
            {{$errors->first('email')}}
          </div>
         </div>

        {{Bootstrap::horizontal('col-sm-7','col-sm-3')
          ->password('password','Password')}}

        <div class="form-group">
          {{Form::label('level','Level',array('class'=>'col-sm-3 control-label'))}}
          <div class="col-sm-7">
            <select name="level" id="level" class="form-control">
              <option></option>
              <option value="admin">Admin</option>
              <option value="anggota">Anggota</option>
            </select>
          </div>
        </div>

            <div class="form-group well">
              {{Form::label('','',array('class'=>'col-sm-3 control-label'))}}
              <div class="col-sm-7">
                <button class="btn btn-primary">
                  <i class="glyphicon glyphicon-saved"></i>
                  Simpan
                </button>

                <a href="{{URL::to('admin/users')}}" class="btn btn-success">
                  Kembali
                </a>
              </div>
            </div>
      {{Form::close()}}
    </div>

  </div>
@stop
