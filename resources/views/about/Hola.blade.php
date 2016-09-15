@extends('layouts.master')
@section('content')
    <h1>About Us</h1>
    <p>We are a team of 100. Hola! Amigo Lorem ipsum serum culm ellum Lorem ipsum serum culm ellum</p>
@endsection
@section('adverstisement')
@parent
<h3>{{ $page_title or 'Personal Information'}}</h3>
    <div class="user_info">
        <p>Full Name: {{ $name }}</p>
        <p>Date of publication: {{ $date }}</p>
        <p>Favourite Quote: {{$favourite_quote or 'No quote'}}</p>
        <p>{{ 'My list <script>alert("spam spam spam!")</script>' }}</p><!-- 
        <p>{--!! 'My list <script>alert("spam spam spam!")</script>' !!--}</p> -->
    </div>
@endsection