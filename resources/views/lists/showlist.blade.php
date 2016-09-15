@extends('layouts.master')
@section('content')
            <div class="content">
                <h1>List of Products</h1>
                <p>Hola! Amigo Lorem ipsum serum culm ellum Lorem ipsum serum culm ellum</p>
                <ul>
                    
                    @if(count($product_lists) > 1)
                        @foreach($product_lists as $list)
                        <li>{{ $list }}</li>
                        @endforeach
                    @elseif(count($product_lists) == 1)

                        <p>You have one list: {{ $product_lists[0] }}</p>
                    @else
                        <p>you don't have any product available.</p>
                    @endif

                </ul>
                <table class="table border-less"> 
                <h3>{{$userTitle}}</h3>
                <ul>
                @foreach($users as $user)
                    <li>{{$user}}</li>
                @endforeach
                </ul>
                <div class="movie">
                    <h3>Movies</h3>
                    <div class="movie-section">
                    @if($movies->count() > 0 )
                        <ul>
                        @foreach($movies as $movie)
                        <li class="col-md-4">
                            <img src="asset/image/{{$movie->image_url}}" alt="{{$movie->title}}">
                            <p><b>Title:</b>{{$movie->name}}</p>
                            <p><b>Description:</b>{{$movie->description}}</p>
                            <p><a class="btn btn-success">Download</a></p>
                        </li>
                        @endforeach
                        </ul>
                    @else
                    <p>No record is available </p>
                    @endif
                    </div>
                </div>
                <div class="title">Laravel 5</div>
            </div>
            <a href="http://www.wjgilmore.com" class="btn btn-success">W.J. Gilmore,LLC</a>
        @endsection
        @section('advertisement')
         <p>Product lists Lorem ipsum serum culm ellum Lorem ipsum serum culm ellum</p>
         <img src="../image/banner1.jpg" alt="No image">
        @endsection

