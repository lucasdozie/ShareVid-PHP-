@extends('layouts.master')
@section('content')
<div class="content">
<h1>Add a New Task</h1>
<p class="lead">Add to your task list below.</p>
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

{!! Form::open([
    'route' => 'tasks.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['required','class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('note', 'Note:', ['class' => 'control-label']) !!}
    {!! Form::textarea('note', null, ['required','class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
@endsection