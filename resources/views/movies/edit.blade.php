@extends('layouts.master')
@section('content')
<div class="content">
    @include('partials.alerts.errors')
    <div>
        <h1>Upload a Movie</h1>
        <p>Edit and save this movie below, or <a href="{{ route('movies.index') }}">go back to all Movies.</a></p>
<hr>
        {!! Form::model ($movie, array('method'=>'PUT', 'route'=> ['movies.update', $movie->id],'class'=>'form', 'files'=>true)) !!}
            @include('partials.movieForm')
        {!! Form::close() !!}
    </div>
@endsection
@section('advertisement')
    <h3>{{ $page_title or 'Personal Information'}}</h3>
    <div class="user_info">
       
    </div>
@endsection
