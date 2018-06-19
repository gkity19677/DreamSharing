@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">
  <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

<div class="container-fluid" id="c7">
  <div id="title">
    <center><h2>{{$dreams->title}}</h2></center>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
          <form class="" action="{{url('mydream_edit')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$dreams->id}}">
            <i class="fas fa-calendar-alt"></i>{{$dreams->date}}<br><br>
            <i class="fas fa-edit"></i> <textarea name="content" id="content" rows="8" cols="40"><i class="fas fa-edit"></i>{!!$dreams->content!!}</textarea>
            <script>
            ClassicEditor
          .create( document.querySelector( '#content' ) )
          .catch( error => {
              console.error( error );
          } );
            </script>

            <br><input class="btn btn-default pull-right" type="submit" value="保存">
          </form>
        </div>
  </div>
</div>

</body>
@endsection
