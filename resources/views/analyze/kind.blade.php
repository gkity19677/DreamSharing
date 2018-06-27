@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/person.css')}}">

<div class="container-fluid" id="backcolor">
  <br>
  @foreach ($titles as $title)
    <input id="{{$title->id}}" type="button" name="button_{{$title->id}}" onclick="" class="button title_change" value="{{$title->title}}"><br>

  @endforeach

  <div class="analyze_content">
    <div id= "favorite_div">
      @if (DB::table('favorites')->where('u_id',Auth::user()->id)->where('article_id',$ana->id)->where('flag','A')->first()==null)
        <button type="submit" id="keep" class="keepbtn">
          <i id="heart" class="far fa-heart" > 收藏</i>
        </button>
      @else
        <button type="submit" class="keepbtn">
          <i id="heart" class="fas fa-heart" > 收藏</i>
        </button>
      @endif
    </div>





    <div id="theword">
			<div id="title">{{$ana->title}}</div><br>
      {!!$ana->content!!}

    </div>
  </div>
  <meta name="_token" content="{{ csrf_token() }}"/>
  <script type="text/javascript">
    var now_id = {{$ana->id}};
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
          now_id=id;
          $("#theword").empty();
          $("#theword").append('<div id="title">'+data.ana.title +'</div><br>'+data.ana.content);
          if (data.like==null) {
            $("#favorite_div").empty();
            $("#favorite_div").append("<button type='submit' id='keep' class='keepbtn'><i id='heart' class='far fa-heart' > 收藏</i></button>");
            
            $("#keep").click(function(){
              console.log(1234);
              var flag ='A';
              var id = now_id;
              $.ajax({
                type : 'post',
                url : "{{url('keep')}}",
                data : {
                  flag:flag,
                  article_id:id,
                },
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function (data) {
                  console.log(123);
                  $("#heart").toggleClass("far",false);
                  $("#heart").toggleClass("fas",true);
                  $("#keep").attr("id","");
                },
                error: function(xhr, type){
                  alert('出錯惹！');
                }
              });
            });
          }else{
            $("#favorite_div").empty();
            $("#favorite_div").append("<button type='submit'  class='keepbtn'><i id='heart' class='fas fa-heart' > 收藏</i></button>")
          }
        },
        error: function(xhr, type){
          alert('出錯惹！');
        }
      });

    });

    $("#keep").click(function(){
      console.log(1234);
      var flag ='A';
      var id = now_id;
      $.ajax({
        type : 'post',
        url : "{{url('keep')}}",
        data : {
          flag:flag,
          article_id:id,
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
          console.log(123);
          $("#heart").toggleClass("far",false);
          $("#heart").toggleClass("fas",true);
          $("#keep").attr("id","");
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
