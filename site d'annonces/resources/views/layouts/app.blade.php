<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brief 7</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/home.css">
    @yield('link')
</head>
<body>

<nav class="nav">
        <ul class="flex items-center">
             <li>
                 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 <i> <span>Jobbing</span> <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_epvidscs.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player></i>
                <!-- <img src="assets/jobbing-n.png" class="jobbing my-0"> -->
                <!-- <i src="https://assets4.lottiefiles.com/private_files/lf30_kskakh1u.json" class="jobbing my-0"></i> -->
            </li>
            <li>
                <a href="/" class="b from-center nav-item">Home</a>
            </li>
            <li>
                <a href="{{route('annonces')}}" class="b from-center nav-item">annonces</a>
            </li>
            <li>
                <a href="{{route('demandes')}}" class="b from-center nav-item">demandes</a>
            </li>
        </ul>
        <ul class="">
            @if(auth()->user()) 
            <li>
                <a href="#" class="nav-item">{{ auth()->user()->firstname}}</a>
            </li>
            <li>
                
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="logout">Logout</button>
            </form>
            </li>
            @else
            <li>
                <a href="{{route('login')}}" class="b from-center nav-item">login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="b from-center nav-item">Register</a>
            </li>
            @endif
            
        </ul>
    </nav>
    




   @yield('content') 


   <footer>
   <div class="footer-basic">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/">Home</a></li>
                <li class="list-inline-item"><a href="{{route('annonces')}}">Annonces</a></li>
                <li class="about list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="{{route('demandes')}}">Demandes</a></li>
                <li class="pp list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Jobbing Company © 2022</p>
    </div>
        </footer>
</body>
</html>