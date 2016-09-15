@extends('layouts.master')
@section('content')
<div class="content">
    <ul class="form"> 
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
    @endforeach
    </ul>
    <section>
    	<h1>{{$movie->title}}</h1>
    	<p class="lead">{{$movie->description}}</p>
    	<p>{{$movie->image_url}}</p>
        @if($movie->video_name)
        <div class="row">
                <video height="300px" controls>
                    <source src="/movieapp/videos/{{$movie->video_name}}" type="video/mp4">
                    <source src="/movieapp/videos/{{$movie->video_name}}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
         </div>
    	@else
        <iframe src="{{$movie->link}}">{{$movie->link}}</iframe>
        @endif
    	<p>{{$movie->rating}}</p>
    	<hr>
    	<a href="{{ route('movies.index') }}" class="btn btn-info">Back to all Movies</a>
		<a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit Movie</a>
        <a style="border: 1px solid rgb(51, 122, 183);" target="_blank" href="/movieapp/videos/{{$movie->video_name}}" class="btn btn-secondary" download>Download</a>

		<div class="pull-right">
		    {!! Form::open(array('route'=> array('movies.destroy',$movie->id), 'method'=>'delete')) !!}
                 <button type="submit" class="btn btn-danger">Delete Movie</button>
            {!! Form::close() !!}
		</div>
    </section>
</div>
@endsection