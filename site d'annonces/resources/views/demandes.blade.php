@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/demandes.css">
@endsection

@section('content')
<div >
<div class="bg-white p-1">
<form action="{{route('demandes.search2')}}" method="get" class="d-flex justify-content-center">
    <div class="form-group mb-0 mr-4 mx-3 col-md-4">
      <input type="search" class="form-control mr-3" name="query" wire:model="query" id="query" placeholder="Search by title">
    </div>
    <button type="submit" class="btn btn-primary mx-4">Search</button>
  </form>

<h4 class="title">Ajouter Une Demande</h4>
<form class="form" action="{{route('demandes')}}" method="post">
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
      <label class="l-reference" for="contrat">
        Contrat
      </label><br>
      <input class="reference" id="contrat" name="contrat" type="text" autocomplete="off">
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
        <button type="submit" class="submit" >Post</button>
        </div>
        </form>

        <h4 class="title">La Liste Des Demandes</h4>
        @if($demandes->count())
              @foreach($demandes as $demande)
              <div class="card-deck px-3">
  <div class="card">
    <img class="card-img-top" src="assets/img3.jpg"  alt="Card image cap">
    <div class="card-body">
    <a href="" class="name text-capitalize">{{$demande->user->firstname}} {{$demande->user->lastname}}</a>
      <h4 class="card-title">{{$demande->title}} </h4>
      <p class="card-text">Contrat: {{$demande->contrat}}</p>
      <p class="card-text">à : {{$demande->ville}}</p>
      <p class="card-text">{{$demande->description}}</p>

      @if($demande->likeBy(auth()->user()))
      <div class="btns">
        <form action="{{route('demandes.likes',$demande->id)}}" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-primary">Like</button>
          <span class="btn">{{$demande->likes->count()}} {{Str::plural('like',$demande->likes->count())}}</span>
        </form>
      </div>
      @endif



      <div class="">
      @if($demande->deletedBy(auth()->user()))
          <div class="btns">
          <a class="btn btn-primary" href="{{ url('editD/'.$demande->id) }}">Modifier</a>
          <form action="{{route('demandes.destroy',$demande)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" href="#">Supprimer</button>
          </form>
          </div>
          @endif
      </div>
    </div>
   
  </div>
  </div>
            
              @endforeach
              <div class="container px-5 mx-5 my-5">
              {{$demandes->links('layouts.paginationLink')}}
              </div>
        @else
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_oga1x3jk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover loop  autoplay></lottie-player>
        @endif
        </div>
        
       
</div>
</div>

@endsection
