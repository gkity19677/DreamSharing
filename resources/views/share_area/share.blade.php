@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/share_area.css')}}">
  <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

  <div class="container-fluid" id="c8">
  <div id="topimg">
    <img src="image/sharetopimg.png">
  </div>
  <div class="typebutton">
    <button onclick="location.href='{{url('mydream')}}'" type="submit" id="b0">我要分享</button>
  </div>
  <div class="box box-primary" id="form">
        <div class="box-body">



          @foreach ($dreams as $dream)
            <a id="a_{{$dream->id}}" href="share_result/{{$dream->id}}"></a>
          <div class="word" dream_id="{{$dream->id}}">
              <p class="text-muted" >
                @if($dreams[$loop->index]->MyUser->sex == "")
                  <img src="image/femaleuser.png" id="user">
                @else
                  <img src="image/maleuser.png" id="user">
                @endif

                <b>{{$dream->title}}</b><br>
                {!!$dream->content!!}
              </p>
            </div>
            <hr>
        @endforeach
        </div>
          <img src="{{url('image/sharebg.png')}}" id="pic1">
  </div>


  <script language="javascript">
    $('.word').click(function() {
      var id = $(this).attr("dream_id");
      document.getElementById("a_"+id).click();
    });
  </script>

</div>
@endsection
