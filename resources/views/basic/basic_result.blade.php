@extends('layouts.layout')
@section('content')
	<link rel="stylesheet" href="{{asset('css/basic.css')}}">

<div class="container-fluid" id="c11">
  <div id="basicpng">
    <img src="image/basic.png">
  </div>
  <form class="form-horizontal" id="form">
    <div class="form-group">
      <label class="col-sm-2 control-label">帳號</label>
      <div class="col-sm-7">
        <p>{{Auth::user()->account}}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">姓名</label>
      <div class="col-sm-7">
        <p>{{Auth::user()->name}}</p>
       </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">信箱</label>
      <div class="col-sm-7">
        <p>{{Auth::user()->email}}</p>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">密碼</label>
      <div class="col-sm-7">
        <p>{{Auth::user()->password}}</p>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a class="btn btn-default pull-right" href="{{url('basic_update')}}" role="button">修改</a>
      </div>
    </div>
  </form>
</div>
@endsection
