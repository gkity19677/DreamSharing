@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/basic.css')}}">
  <div class="container-fluid" id="c11">
		<div id="basicpng">
			<img src="image/basic.png">
		</div>
		<form class="form-horizontal" action="{{url('basic_update')}}" method="post">
			<div class="box box-primary" id="form">
  		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
    		<div class="col-sm-7">
      		<input class="form-control" value="{{Auth::user()->account}}">
    		</div>
  		</div>
			<div class="form-group">
    		<label  class="col-sm-2 control-label">姓名</label>
    		<div class="col-sm-7">
      		<input class="form-control" value="{{Auth::user()->name}}">
    		</div>
  		</div>
			<div class="form-group">
    		<label class="col-sm-2 control-label">信箱</label>
    		<div class="col-sm-7">
      		<input class="form-control" value="{{Auth::user()->email}}">
    		</div>
  		</div>
			<div class="form-group">
    		<label class="col-sm-2 control-label">密碼</label>
    		<div class="col-sm-7">
      		<input class="form-control" value="{{Auth::user()->password}}">
    		</div>
  		</div>
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      		<a class="btn btn-default pull-right" type="submit" role="button">保存</a>
    		</div>
  		</div>
		</div>
		</form>
	</div>

@endsection
