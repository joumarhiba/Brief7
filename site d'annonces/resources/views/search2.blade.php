@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/demandes.css">
@endsection

@section('content')
<div >
<div class="bg-white p-3">



        <h4 class="title">Les Demandes trouvées</h4>
        @if($demandes->count())
              @foreach($demandes as $demande)
              <div class="card-deck">
  <div class="card">
    <img class="card-img-top " src="assets/img3.jpg"  alt="Card image cap">
    <div class="card-body">
    <a href="" class="name text-capitalize">{{$demande->user->firstname}} {{$demande->user->lastname}}</a>
      <h4 class="card-title">{{$demande->title}} </h4>
      <p class="card-text">Contrat: {{$demande->contrat}}</p>
      <p class="card-text">à : {{$demande->ville}}</p>
      <p class="card-text">{{$demande->description}}</p>
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
              
        @else
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 <i> <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_oga1x3jk.json"  background="transparent"  speed="1" style="width: 300px; height: 300px;" hover loop  autoplay></lottie-player>
        @endif
        </div>
        
       
</div>
</div>

@endsection
