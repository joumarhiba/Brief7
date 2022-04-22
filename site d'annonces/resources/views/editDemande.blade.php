@extends('layouts.app')


@section('content')
<div >

<h4 class="title">Modifier une demande</h4>
<form action="/update" method="post">
    @csrf
    <input class="form-control" style="width: 50%;" type="hidden" name="id" id="id" value="{{$d['id']}}" autocomplete="off"><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="title" id="title" value="{{$d['title']}}" autocomplete="off"><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="contrat" id="contrat" value="{{$d['contrat']}}" autocomplete="off"><br><br>
    <input class="form-control" style="width: 50%;" type="text" name="ville" id="ville" value="{{$d['ville']}}" autocomplete="off"><br><br>
    <input class="form-control" style="width: 50%;" name="description" id="description" value="{{$d['description']}}" autocomplete="off"><br><br>
    <button type="submit">Save</button>
</form>
</div>
</div>
@endsection