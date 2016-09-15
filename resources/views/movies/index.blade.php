@extends('layouts.master')
@section('content')
<div class="content">
    <ul class="form"> 
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
    <div class="movie">
        <h3>All Movies</h3>
        <p><a href="{{route('movies.create')}}">Click here to create new movies</a></p>
        <div class="movie-section">
        @if($movies->count() > 0 )
        <ul style="list-style-type: none; padding-left: 0px; float: left; width: ">
        @foreach($movies as $movie)
         <li class="col-md-4"> 
           <a href="{{ route('movies.show', $movie->id) }}">
            <img src="/movieapp/images/{{$movie->image_name}}" alt="{{$movie->title}}" style="width: 100%; max-height:200px; min-height: 200px;">
            <p><b>{{$movie->title}}</b></p>
            <p ><b>{{$movie->rating}}</b></p>
           </a>
            <p style="height: 63px; overflow: hidden;">{{$movie->description}}</p>
            <p>
                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info">Trailer</a>
                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit</a>
                <a style="border: 1px solid rgb(51, 122, 183);" target="_blank" href="/movieapp/videos/{{$movie->video_name}}" class="btn btn-secondary" download>Download</a>
            </p>
         </li>
        @endforeach
        </ul>
        @else
        <p>No record is available </p>
        @endif
    </div>
@endsection
@section('advertisement')
    <h3>{{ $page_title or 'Personal Information'}}</h3>
    <div class="user_info">
       
    </div>
@endsection
