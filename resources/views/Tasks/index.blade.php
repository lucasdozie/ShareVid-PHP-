@extends('layouts.master')
@section('content')
<div class="content">
	<h1>Welcome Tasks!</h1>
	<h3>Click a button below to create a new task</h3>
	<a href="#">Create</a>
	<div>
		@foreach($tasks as $task)
		    <h3>{{ $task->title }}</h3>
		    <p>{{ $task->note}}</p>
		    <p>
		        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
		        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
		    </p>
		    <hr>
		@endforeach
		<p>Oct 10, 2013 - Simple Laravel CRUD with Resource Controllers. Chris Sevilleja ... In the command line in the root directory of our Laravel application, let's create a migration. ...... I guess its because this is a laravel 4 tut and I', running it on 5.</p>
	</div>
</div>
@stop