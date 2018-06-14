@extends('layouts.layout')

@section('content')
  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

<div class="container-fluid" id="c7">
  <div id="mydream">
    <img src="image/mydream.png">
  </div>
  <div class="col-md-offset-8 col-md-2 icon" >
      <ul>
        <li><a href="{{url('mydream_add')}}"><i class="fas fa-plus"></i></a></li>
        <li><a href="mydream.html"><i class="fas fa-trash-alt"></i></a></li>
      </ul>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
          @foreach ($dreams as $dream)
            <div class="word" onclick="test()">
                <strong><i class="fas fa-calendar-alt"></i>{{$dream->date}}</strong>
                <p class="text-muted" >
                  <b>{{$dream->title}}</b>
                </p>
            </div>
                <hr>
          @endforeach
					
        </div>
  </div>
</div>
<script language="javascript">
function test() {　
　document.location.href='mydream_result.html';
}
</script>

@endsection
