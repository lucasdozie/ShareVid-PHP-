@extends('layouts.master')
@section('content')
<div class="content">
        <h1>{{ $page_title }}</h1>
        <div>
         NO. of Movies = {{$movies->count()}}<br/>
         Movie Category = {{$movies->categories}}
        </div>
        <div>           
            @if($movies->count() > 0)
            <table>
                <tr><th>Id</th><th>Title</th><th>Description</th><th>Image Url</th><th>Movie Link</th><th>Categories</th><th>Total Downloads</th><th>Created</th><th>Last Update</th></tr>
            @foreach($movies->categories as $category)
                <tr>
                    <td>{{$movies->id}}</td>
                    <td>{{$movies->name}}</td>
                    <td>{{$movies->description}}</td>
                    <td>{{$movies->image_url}}</td>
                    <td>{{$movies->link}}</td>
                    <td><a href="{{route('lists.index')}}">{{$category->name}}</a></td>
                    <td>{{$movies->count()}}</td>
                    <td>{{$movies->created_at}}</td>
                    <td>{{$movies->updated_at}}</td>
                </tr>

            @endforeach
            </table>
            @else
                <p>No movie of that category</p>
            @endif
        </div>
    </div>
@endsection
@section('advertisement')
    <h3>{{ $page_title or 'Personal Information'}}</h3>
    <div class="user_info">
        <p>category->name}}</p>
        <p>Full Name: </p><!-- 
        <p>{--!! 'My list <script>alert("spam spam spam!")</script>' !!--}</p> -->
    </div>
@endsection
