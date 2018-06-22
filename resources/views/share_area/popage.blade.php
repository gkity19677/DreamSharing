@extends('layouts.layout')

@section('content')
  <link rel="stylesheet" href="{{asset('css/popage.css')}}">
  <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

<div class="container-fluid" id="c10">
  <div class="box box-primary" id="form">
    <div class="box-body">
      <form>
      <p>夢境類型</p>
      <select class="form-control" id="select1">
        <option>人</option>
        <option>動物</option>
        <option>靈異</option>
        <option>事件</option>
        <option>場景</option>
      </select>
      <br>
      <p>標題</p>
      <input type="text" class="form-control" id="text1"><br>
      <p>夢境</p>
      <textarea name="name" id="content" rows="8" cols="40"></textarea>
      <script>
      ClassicEditor
    .create( document.querySelector( '#content' ) )
    .catch( error => {
        console.error( error );
    } );
      </script>
      <br><a class="btn btn-default pull-right" href="share.html" role="button">分享</a>
    </form>
    </div>
  </div>
</div>

@endsection
