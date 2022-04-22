@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/annonces.css">
@endsection

@section('content')



        <h4 class="title">Les Annonces Trouvées</h4>


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
  
              @endforeach
            @else
           <div class="mb-5">
           <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_oga1x3jk.json"  background="transparent"  speed="1" class="mb-5" style="width: 400px; height: 300px;" hover loop  autoplay></lottie-player>
           </div>
        @endif

        
        
</div>
</div>
@endsection