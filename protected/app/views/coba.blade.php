@extends('template.default')

@section('content')
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active"><a href="#home">Home</a></li>
	  <li><a href="#profile">Profile</a></li>
	  <li><a href="#messages">Messages</a></li>
	  <li><a href="#settings">Settings</a></li>
	</ul>

	<div class="tab-content">
	  <div class="tab-pane active" id="home">
	  	<br>
	  	{{Form::open(array('url'=>'#profile','method'=>'post','class'=>'form-horizontal'))}}
	  		{{Bootstrap::horizontal('col-sm-4','col-sm-2')
	  			->text('tanggal','Tanggal Masuk','',$errors)}}
	  	{{Form::close()}}
	  </div>
	  <div class="tab-pane" id="profile">...</div>
	  <div class="tab-pane" id="messages">...</div>
	  <div class="tab-pane" id="settings">...</div>
	</div>

	<script>
		$(function(){
			$('#myTab a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			});
		});
	</script>

@stop