@extends('layouts/app')

@section('content')
<h1>Announcements</h1>
@if (count($announcements)>0)
   @foreach ($announcements as $announcement)
      <div class="card p-3 mt-3 mb-3">
            <h3><a href="/announcements/{{$announcement->id}}">{{$announcement->title}}</a></h3>
            <small>Written On : {{$announcement->created_at}}</small>
      </div>
   @endforeach
   {{ $announcements->links() }}
   @else
      <h2>No announcements Found</h2>
@endif
@endsection