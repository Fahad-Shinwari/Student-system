@extends('layouts/app')
@section('content')
<div class="jumbotron text-center">
    <h1>Home Page {{$title}}</h1>
    <p>
        <a class="btn btn-primary btn-lg" href="/login">Login</a>
        <a class="btn btn-success btn-lg" href="/signup">Sign Up</a>
    </p>
</div>
@endsection
        
