@extends('layouts.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="{{asset('css/edit.css')}}">
@endsection

@section('content')
<div >

<h4 class="title">Modifier une annonce</h4>
<form class="form" action="/edit" method="post">
    @csrf
    <input class="form-control" style="width: 50%;" type="hidden" name="id" id="id" value="{{$data['id']}}" ><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="title" id="title" value="{{$data['title']}}" placeholder="title"><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="entreprise" id="entreprise" value="{{$data['entreprise']}}" placeholder="Company"><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="ville" id="ville" value="{{$data['ville']}}" placeholder="City"><br><br>
    <input class="form-control" style="width: 50%;" name="description" id="description" value="{{$data['description']}}" placeholder="description"><br><br>
    <!-- <button  class="button"><span>Save </span></button-->
    <ul>
    <button class="li">
      Save
      <span></span><span></span><span></span><span></span>
</button>
    </ul>
</form>
</div>
</div>
@endsection