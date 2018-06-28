@extends('layouts.layout')

@section('content')
  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

<div class="container-fluid" id="c7">
  <div id="mydream">
    <img src="{{asset('image/mydream.png')}}">
  </div>
  <div class="col-md-offset-8 col-md-2 icon" >
      <ul>
        <li><a href="{{url('mydream_add')}}"><i class="fas fa-plus"></i></a></li>

      </ul>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
          @foreach ($dreams as $dream)
            <a id="a_{{$dream->id}}" href="mydream_result\{{$dream->id}}"></a>
              @csrf
              <div class="word" dream_id="{{$dream->id}}">
                  <strong><i class="fas fa-calendar-alt"></i>{{$dream->date}}</strong>
                  <p class="text-muted" >
                    <b>{{$dream->title}}</b>
                  </p>
              </div>
                <hr>
          @endforeach

        </div>

  </div>
  	<img src="{{asset('image/mydreampic1.png')}}" id="pic1">
</div>
<script language="javascript">
  $('.word').click(function() {
    var id = $(this).attr("dream_id");
    document.getElementById("a_"+id).click();
  });
</script>

@endsection
