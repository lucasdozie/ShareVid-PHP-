@extends('layouts.master')
@section('content')
<div class="content">
    <ul class="form"> 
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
    @endforeach
    </ul>
    <div>
        <h1>Upload a Movie</h1>
        {!!Form::open (array('route'=>'movies.store','class'=>'form', 'files'=>true))!!}
            @include('partials.movieForm')
        {!! Form::close() !!}
    </div>
@endsection
@section('advertisement')
    <h3>{{ $page_title or 'Personal Information'}}</h3>
    <div class="user_info">
       
    </div>
@endsection
