@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/annonces.css">
@endsection

@section('content')
<div >
<div class="bg-white p-1">
  
  <form action="{{route('annonces.search')}}" method="get" class="d-flex justify-content-center">
    <div class="form-group mb-0 mr-4 mx-3 col-md-4">
      <input type="search" class="form-control mr-3" name="query" wire:model="query" id="query" placeholder="Search by title">
    </div>
    <button type="submit" class="btn btn-primary mx-4">Search</button>
  </form>
  
  <h4 class="title">Ajouter Une Annonce</h4>

<form class="form" action="{{route('annonces')}}" method="post">
        @csrf
       <div class="champ">
      <div class="w-full px-3">
      <label class="l-reference" for="title">
        Title
      </label><br>
      <input class="reference" id="title" name="title" type="text" autocomplete="off">
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
      <input class="reference" id="entreprise" name="entreprise" type="text"  autocomplete="off">
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
      <input class="reference" id="ville" name="ville" type="text" autocomplete="off">
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
      <textarea name="description" class="reference" cols="30" rows="3"></textarea>
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
  <div class="card-deck px-3">
  <div class="card">
    <img class="card-img-top " src="assets/img3.jpg"  alt="Card image cap">
    <div class="card-body">
    <a href="" class="name text-capitalize">{{$annonce->user->firstname}} {{$annonce->user->lastname}}</a>
      <h4 class="card-title">{{$annonce->title}} </h4>
      <p class="card-text">Entreprise : {{$annonce->entreprise}}</p>
      <p class="card-text">à : {{$annonce->ville}}</p>
      <p class="card-text">{{$annonce->description}}</p>

      @if($annonce->likeBy(auth()->user()))
      <div class="btns">
        <form action="{{route('annonces.likes',$annonce->id)}}" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-primary">Like</button>
          <span class="btn">{{$annonce->likes->count()}} {{Str::plural('like',$annonce->likes->count())}}</span>
        </form>
      </div>
      @endif

      <div class="">
      @if($annonce->deletedBy(auth()->user()))
          <div class="btns">
          <!-- <a class="mt-4 px-4" href="{{ url('edit/'.$annonce->id) }}">Modifier</a> -->
          <a class="btn btn-primary" href="{{ url('edit/'.$annonce->id) }}">Modifier</a>
          <!-- <a class="btn btn-primary" href="{{ route('annonces.destroy',$annonce) }}">Supprimer</a> -->
          <form action="{{route('annonces.destroy',$annonce)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" href="#">Supprimer</button>
          </form>
          </div>
          @endif
      </div>
    </div>
    <div class="card-footer">
      <small class="text-muted"><span class="text-muted my-0">{{ $annonce->created_at->diffForHumans()}}</span></small>
    </div>
  </div>
  </div>
              @endforeach
              <div class="container px-5 my-5">
              {{$annonces->links('layouts.paginationLink')}}
              </div>
        @else
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_oga1x3jk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover loop  autoplay></lottie-player>
        @endif

        
        
</div>
</div>
@endsection