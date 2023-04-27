 @push('css')
<link rel="stylesheet" href="{{ url('css/style.css') }}">
@endpush 
@extends('Layout/layout')
@section('content')
<div class="d">
  <h1>DAILY TO DO LIST</h1>
  <div class="date">
    <label for="date"><b>DATE:</b></label>
    <input type="date" name="date"> <br>
  </div>
   <table>
    <tr>
      <th><b>N</b></th>
      <th><b>TASK</b></th>
      <th><b>DUE DATE</b></th>
      <th><b>PRIORITY</b></th>
    </tr>
    <tr>
      <td>1</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
    <tr>
      <td>2</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
    <tr>
      <td>3</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
    <tr>
      <td>4</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
    <tr>
      <td>5</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
    <tr>
      <td>6</td>
      <td></td>
      <td><input type="date"></td>
      <td></td>
    </tr>
   </table>
    <br>
    <div class="n">
    <p><b>NOTES:</b></p>
    <input type="text" name="desc" placeholder="enter notes">
  </div>
    <input type="submit">
</div>
</div>
    @endsection