@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="  ckeditor/ckeditor.js"></script>

<div class="container-fluid" id="c7">
  <div id="title">
    <center><h2>我的夢境</h2></center>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
          <form class="" action="{{url('mydream_add')}}" method="post">
            @csrf
            <i class="fas fa-book"></i> <input type="text" placeholder="標題" name="title" value="">
            <i class="fas fa-calendar-alt" id="date1"></i> <input class="datepicker" placeholder="日期" id="date2" name="date"><br><br>
            <i class="fas fa-edit"></i> <textarea name="content" id="content" rows="8" cols="40"><i class="fas fa-edit"></i>
            </textarea>

            <script>
              ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
                $('.datepicker').datepicker({
                  dateFormat:"yy/mm/dd"
                });
            </script>
            <br>
            <input type="submit" name="" value="保存" class="btn btn-default pull-right" >
          </form>
        </div>
  </div>
</div>

@endsection