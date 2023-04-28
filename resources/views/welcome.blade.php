@extends('Layout/layout')
@section('content')
<form action="/savedata" method="POST">
  <label for="title">Title:</label>
  <input type="text" name="title" placeholder="enter title"> <br>
  <label for="desc">Description:</label>
  <input type="text" name="desc" placeholder="enter desc">
    @csrf
    <button type="submit">SAVE</button>
</div>
</div>
</form>
    @endsection