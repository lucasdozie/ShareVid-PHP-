@extends('layouts.master')
@section('content')
<div class="content">
<hr>
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<hr>


<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->note }}</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a>
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this task</a>
</div>

</div>
@stop