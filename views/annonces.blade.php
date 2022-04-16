@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/annonces.css">
@endsection

@section('content')
<div >
<div class="bg-white p-1">
<h4 class="title">Ajouter Une Annonce</h4>
<form class="form" action="{{route('annonces')}}" method="post">
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
      <label class="l-reference" for="entreprise">
        Entreprise
      </label><br>
      <input class="reference" id="entreprise" name="entreprise" type="text">
      @error('entreprise')
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
        <button type="submit" class="submit" >Submit</button>
        </div>
        </form>

        <h4 class="title">La Liste Des Annonces</h4>
        @if($annonces->count())
              @foreach($annonces as $annonce)
              <div class="liste mb-4 p-4">
                  <a href="" class="name text-capitalize">{{$annonce->user->firstname}} {{$annonce->user->lastname}}</a> <span class="text-muted my-0">{{ $annonce->created_at->diffForHumans()}}</span> 
                  <h4 class="text-capitalize">{{$annonce->title}} </h4>
                  <p class="text-capitalize">Entreprise : {{$annonce->entreprise}}</p>
                  <p class="text-capitalize">à : {{$annonce->ville}}</p>
                  <p class="text-muted my-0"> {{$annonce->description}}</p>
              </div>
              @endforeach
              <div class="container px-5">
              {{$annonces->links()}}
              </div>
        @else
        there is nooooo data here
        @endif

        </div>
        
</div>
</div>
@endsection