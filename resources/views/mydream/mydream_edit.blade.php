@extends('layouts.layout')
@section('content')

<div class="container-fluid" id="c7">
  <div id="title">
    <center><h2>我的夢境</h2></center>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
          <form class="" action="index.html" method="post">
            <i class="fas fa-calendar-alt"></i>2018/5/20<br><br>
            <i class="fas fa-edit"></i> <textarea name="name" id="content" rows="8" cols="40"><i class="fas fa-edit"></i> 我在森林裡迷路，遇到一隻跟我一樣高的梅花鹿，我想要靠近看牠，
            可是他一直走、一直走，我的步伐再快都跟不上牠。</textarea>
            <script>
            ClassicEditor
          .create( document.querySelector( '#content' ) )
          .catch( error => {
              console.error( error );
          } );
            </script>
            <br><a class="btn btn-default pull-right" href="mydream_result.html" role="button">保存</a>
          </form>
        </div>
  </div>
</div>

</body>
@endsection
