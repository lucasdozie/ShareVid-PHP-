@extends('layouts.master')
@section('content')
<div class="content">
        <h1>Upload a Movie</h1>
        <div>
        {!!Form::open (array('route'=>'contact_store','class'=>'form'))!!}
            <div class="form-group">
                {!!Form::label('Title')!!}
                {!!Form::text('name', null,array('required','class'=>'form-control','placeholder'=>'Your name'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Description')!!}
                {!!Form::text('description',null,array ('required','class' => 'form-control','placeholder'=>'Description'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Image_url')!!}
                {!!Form::text('image_url',null,array ('required','class' => 'form-control','placeholder'=>'Image Url'))!!}
            </div>
            <div class="form-group">
                {!!Form::submit('Upload!', array('class' => 'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}

    </div>
    </div>
@endsection
@section('advertisement')
    <h3>{{ $page_title or 'Personal Information'}}</h3>
   
@endsection
