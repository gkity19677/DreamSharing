@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-hover">
  @foreach ($query as $var)
    <tr>
      <td>{{}}</td>
    </tr>
@endforeach
</table>
</div>
@endsection
