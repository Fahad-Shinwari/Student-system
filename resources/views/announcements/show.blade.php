@extends('layouts/app')

@section('content')

    <div class="jumbotron">
        <a href="/announcements" class="btn btn-success ml-auto">Go Back</a>
        <h2>{{$announcement->title}}</h2>
        <p>{!!$announcement->body!!}</p>
        <small>{{$announcement->created_at}}</small>
    </div>
    <hr>
    
    
    
@endsection