@extends('template.default')

@section('content')

  <div class="row">
    <div class="col-sm-8">
      {{Form::model($user,array('url'=>route('sis_admin.users.update',['id'=>$user->id]),'method'=>'PUT','class'=>'form-horizontal','files'=>true))}}
        {{Bootstrap::horizontal('col-sm-7','col-sm-3')
          ->text('username','Username',$user->username,$errors)}}

        {{Bootstrap::horizontal('col-sm-7','col-sm-3')
          ->password('password','Password')}}

        <div class="form-group">
          {{Form::label('level','Level',array('class'=>'col-sm-3 control-label'))}}
          <div class="col-sm-7">
            @foreach($group as $row)
              <input type="radio" @if($row->id==$user->level) checked="checked" @endif class="level" name="level" value="{{$row->id}}"> <i>{{$row->name}}</i> &nbsp;
            @endforeach
          </div>
        </div>

        <div class="form-group" id="datasekolah">
          {{Form::label('sekolah','Sekolah',array('class'=>'col-sm-3 control-label'))}}
          <div class="col-sm-7">
            <select name="sekolah" id="sekolah" class="form-control">
              <option></option>
              @foreach($sekolah as $sek)
                <option value="{{$sek->id}}">{{$sek->nm_sekolah}}</option>
              @endforeach
            </select>
          </div>
        </div>

        {{Bootstrap::horizontal('col-sm-7','col-sm-3')
            ->file('foto','Foto')}}

            <div class="form-group well">
              {{Form::label('','',array('class'=>'col-sm-3 control-label'))}}
              <div class="col-sm-7">
                <button class="btn btn-primary">
                  <i class="glyphicon glyphicon-saved"></i>
                  Simpan
                </button>

                <a href="{{URL::to('sis_admin/users')}}" class="btn btn-success">
                  Kembali
                </a>
              </div>
            </div>
      {{Form::close()}}
    </div>

    <div class="col-sm-4 well">
      <legend>Info</legend>
    </div>
  </div>

  <script>
    $(function(){
      $("#datasekolah").hide();
      $(".level").click(function(){
        var level=this.value;

        if('3'==level){
          $("#datasekolah").show();
        }else{
          $("#datasekolah").hide();
        }
      });
    });
  </script>
@stop
