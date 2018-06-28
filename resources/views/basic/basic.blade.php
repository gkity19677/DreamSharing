@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/basic.css')}}">
  <div class="container-fluid" id="c11">
		<div id="basicpng">
			<img src="image/basic.png">
		</div>
		<form class="form-horizontal" action="{{url('basic_update')}}" method="post">
      @csrf
			<div class="box box-primary" id="form">
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
    		<div class="col-sm-7">
      		<input class="form-control" name="account" value="{{Auth::user()->account}}">
    		</div>
  		</div>
			<div class="form-group">
    		<label  class="col-sm-2 control-label">姓名</label>
    		<div class="col-sm-7">
      		<input class="form-control" name="name" value="{{Auth::user()->name}}">
    		</div>
  		</div>
			<div class="form-group">
    		<label class="col-sm-2 control-label">信箱</label>
    		<div class="col-sm-7">
      		<input class="form-control" name="email" value="{{Auth::user()->email}}">
    		</div>
  		</div>
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<input class="btn btn-default pull-right" type="submit" role="button" value="保存">
    		</div>
  		</div>
		</div>
		</form>
    <img src="image/keep2.png" id="pic2">
	</div>

@endsection
