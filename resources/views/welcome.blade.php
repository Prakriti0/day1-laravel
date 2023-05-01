@extends('Layout/layout')
@section('content')
<form action="@if(!isset($data)){{"/savedata"}} @else {{"/update-data"}} @endif"method="POST">
 @if (isset($data)) <input type="number" name="id"  value = "{{$data->id}}" hidden> @endif
  <label for="title">Title:</label>
  <input type="text" name="title" placeholder="enter title" value=" @if(isset($data)){{$data->title }} @endif"> <br>
  <label for="desc">Description:</label>
  <input type="text" name="description" placeholder="enter desc" value="@if(isset($data)){{$data->description }} @endif">
    @csrf
    <button type="submit">SAVE</button>
</div>
</div>
</form>
    @endsection