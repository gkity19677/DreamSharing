@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/person.css')}}">

<div class="container-fluid" id="backcolor">
  <br>
  @foreach ($titles as $title)
    <input id="{{$title->id}}" type="button" name="button_{{$title->id}}" onclick="" class="button title_change" value="{{$title->title}}"><br>

  @endforeach

  <div class="analyze_content">
    <button type="submit" name="keep" class="keepbtn"><i id="heart" onclick="keep()" class="far fa-heart" > 收藏</i></button>
    <div id="theword">
			<div id="title">{{$ana->title}}</div><br>
      {!!$ana->content!!}

    </div>
  </div>
  <meta name="_token" content="{{ csrf_token() }}"/>
  <script type="text/javascript">
    $(".title_change").click(function() {
      var id = this.id;
      $.ajax({
        type : 'post',
        url : "{{url('person')}}",
        data : {
          id:id,
        },
        dataType : 'json',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
          $("#theword").empty();
          $("#theword").append('<div id="title">'+data.ana.title +'</div><br>'+data.ana.content)
        },
        error: function(xhr, type){
          alert('出錯惹！');
        }
      });

    });
  </script>

  <img src="{{asset('image/rain.png')}}" id="rain">
  <img src="{{asset('image/umgirl.png')}}" id="umgirl">
</div>


@endsection
