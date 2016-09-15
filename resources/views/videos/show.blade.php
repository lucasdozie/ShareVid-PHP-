@extends('layouts.master')
@section('content')
<div class="content">
<hr>
<h1>Videos list</h1>
	 
	 <div class="row">	 
	    <ul>
	 @foreach($videos as $video)
	        <li>
	        <img src="{{$video->name}}" alt="{{$video->title}}" width="300px" height="300px"/></li>
	 @endforeach
	    </ul>
	 </div>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this task</a>
</div>

</div>
@stop