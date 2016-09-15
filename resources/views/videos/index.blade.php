@extends('layouts.master')
@section('content')
<div class="content">
	    {!! Form::open([
	    'route' => 'addvideo',
	    'files' => true
	    ]) !!}
		<div class="form-group">
		    {!! Form::label('name', 'Title:', ['class' => 'control-label']) !!}
		    {!! Form::text('filename', null, ['required','class' => 'form-control']) !!}
		 </div>
		 <div class="form-group">
		    {!! Form::label('category', 'Category:', ['class' => 'control-label']) !!}
		    {!! Form::text('category', null, ['required','class' => 'form-control']) !!}
		 </div>
	    <div class="form-group">
		    {!! Form::label('name', 'Select a video to upload:', ['class' => 'control-label']) !!}
		    {!! Form::file('image', null, ['required','class' => 'form-control']) !!}
		 </div>
		 {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
	    {!! Form::close()!!}
	    
	 
	 <h1>Videos list</h1>
	 
	 <div class="row">
	 
	    <ul>
	 @foreach($videos as $video)
	        <li class="col-md-3">
	        <video height="300px" controls>
			    <source src="/images/{{$video->name}}" type="video/mp4">
			    <source src="/images/{{$video->name}}" type="video/ogg">
			    Your browser does not support the video tag.
			</video>
	        <!-- <img src="/images/{{$video->name}}" alt="{{$video->name}}" width="300" height="120"/> --></li>
	 @endforeach
	    </ul>
	 </div>
</div>
@stop