@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="{{asset('css/keep.css')}}">

  <div class="container-fluid" id="c12">
  <div id="mydream">
    <img src="{{asset('image/keep.png')}}">
  </div>

	<div class="box box-primary" id="form">
        <div class="box-body">
          @foreach ($likes as $like)
            @if ($like->flag =="D")
              <a id="a_{{$like->fid}}" href="{{url('share_result')}}/{{$like->article_id}}"></a>
            @else
              <a id="a_{{$like->fid}}" href="{{url('analyze/')}}/{{$like->belongsToDream->kind }}"></a>
            @endif

            <div like="{{$like->fid}}" class="word">

                <p class="text-muted" >
                  <b>{{$like->belongsToDream->title}}</b>
                </p>
  					</div>
                <hr>

          @endforeach

        </div>
  </div>
	<img src="{{asset('image/keep1.png')}}" id="pic1">
	<img src="{{asset('image/keep2.png')}}" id="pic2">
</div>
<script language="javascript">
$(".word").click(function() {
    var id = $(this).attr("like");
    document.getElementById("a_"+id).click();
});
</script>

@endsection
