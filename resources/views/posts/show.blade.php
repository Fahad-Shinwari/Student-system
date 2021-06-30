@extends('layouts/app')

@section('content')

    <div class="jumbotron">
        <a href="/posts" class="btn btn-success ml-auto">Go Back</a>
        <h2>{{$post->title}}</h2>
        <p>{!!$post->body!!}</p>
        <small>{{$post->created_at}}</small>
    </div>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
    {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    
@endsection