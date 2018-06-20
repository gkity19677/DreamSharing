@extends('layouts.layout')
@section('content')

  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

<div class="container-fluid" id="c7">
  <div id="title">
    <center><h2>{{$dreams->title}}</h2></center>
  </div>
  <div class="col-md-offset-7 col-md-3 icon" >
      <ul>
        <li><a href="{{url('mydream_edit')}}/{{$dreams->id}}"><i class="fas fa-edit"></i></a></li>

        <li><a href="{{url('mydream_delete')}}/{{$dreams->id}}"><i class="fas fa-trash-alt"></i></a></li>
        <li><a href="{{url('mydream')}}"><i class="fas fa-reply"></i></a></li>
      </ul>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
					<div class="word" onclick="test()">
              <strong><i class="fas fa-calendar-alt"></i></i>{{$dreams->date}}</strong>
              <br><br>
              <p><i class="fas fa-edit"></i>
                {!!$dreams->content!!}
              </p>
					</div>
					<br><br><a class="btn btn-default pull-right" href={{url('share')}} role="button">發佈</a>
        </div>
  </div>
</div>
@endsection
