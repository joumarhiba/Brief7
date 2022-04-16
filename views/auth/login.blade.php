@extends('layouts.app')

@section('link')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('content')

<div class="screen-1">
<img class="logo" style="width:18%;" src="https://img.icons8.com/ios-glyphs/90/000000/user--v1.png"/>
<form action="{{route('login')}}" method="POST" class="m-4">
        @csrf
<div class="form-floating mb-3">
            <input type="text" name="email" id="email" class="form-control" style="width: 370px;" placeholder="Your email" autocomplete="off"value="{{old('email')}}">
            <label for="email">Your Email</label>
            @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" style="width: 370px;" placeholder="Choose Your Password" autocomplete="off" value="{{old('password')}}">
            <label for="password">Choose Your Password</label>
            @error('password')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror

            @if(session('status'))
            <div class="text-danger">{{session('status')}}</div>
              @endif
            
        </div>
        <div>
        <button type="submit" class="login" >Login</button>
        </div>
        <div>
            <p class="fst-italic">You don't have an account yet ? <a class="login2" href="{{route('register')}}">Register</a> </p>
        </div>
</div>
</form>

@endsection