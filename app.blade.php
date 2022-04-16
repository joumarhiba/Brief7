<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brief 7</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    @yield('link')
</head>
<body>

<nav class="nav">
        <ul class="flex items-center">
             <li>
                <img src="assets/jobbing-n.png" style="width: 20%; " class="my-0">
            </li>
            <li>
                <a href="/" class="nav-item">Home</a>
            </li>
            <li>
                <a href="{{route('annonces')}}" class="nav-item">annonces</a>
            </li>
            <li>
                <a href="{{route('demandes')}}" class="nav-item">demandes</a>
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
                <a href="{{route('login')}}" class="nav-item">login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="nav-item">Register</a>
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
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="{{route('demandes')}}">Demandes</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Jobbing Company © 2022</p>
    </div>
        </footer>
</body>
</html>