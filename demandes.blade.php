@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/demandes.css">
@endsection

@section('content')
<div >
<div class="bg-white p-3">
<h4 class="title">Ajouter Une Demande</h4>
<form class="form" action="{{route('demandes')}}" method="post">
        @csrf
       <div class="champ">
      <div class="w-full px-3">
      <label class="l-reference" for="title">
        Title
      </label><br>
      <input class="reference" id="title" name="title" type="text">
      @error('title')
                <div class="text-danger">
                    {{$message}}
                </div>
      @enderror
    </div>  
    </div>
    <div class="champ">
      <div class="w-full px-3">
      <label class="l-reference" for="contrat">
        Contrat
      </label><br>
      <input class="reference" id="contrat" name="contrat" type="text">
      @error('contrat')
                <div class="text-danger">
                    {{$message}}
                </div>
      @enderror
    </div>  
    </div>
    <div class="champ">
      <div class="w-full px-3">
      <label class="l-reference" for="ville">
        Ville
      </label><br>
      <input class="reference" id="ville" name="ville" type="text">
      @error('ville')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
    </div>  
    </div>
    <div class="champ">
      <div class="w-full px-3">
      <label class="l-reference" for="description">
        Description
      </label><br>
      <textarea name="description" class="reference" cols="30" rows="5"></textarea>
      @error('description')
                <div class="text-danger">
                    {{$message}}
                </div>
        @enderror
    </div>  
    </div>
    <div>
        <button type="submit" class="submit" >Post</button>
        </div>
        </form>
        <h4 class="title">La Liste Des Demandes</h4>
        @if($demandes->count())
              @foreach($demandes as $demande)
              <div class="liste mb-4 p-4">
                  <a href="" class="name text-capitalize">{{$demande->user->firstname}} {{$demande->user->lastname}}</a>
                  <h4 class="text-capitalize">{{$demande->title}} </h4>
                  <p class="text-capitalize">Type de contrat : {{$demande->contrat}}</p>
                  <p class="text-capitalize">à : {{$demande->ville}}</p>
                  <p class="text-muted my-0"> {{$demande->description}}</p>
              </div>
              @endforeach
        @else
        there is nooooo data here
        @endif
        </div>
        
       
</div>
</div>



@endsection
