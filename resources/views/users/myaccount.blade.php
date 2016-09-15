@extends('layouts.master')
@section('content')
            <div class="content">
                <h1>My Account</h1>
                <h3>{{$userTitle}}</h3>
                <div>
                   
                <div>
                <div class="movie">
                    <h3>Members</h3>
                    <div class="movie-section">
                    @if($users->count() > 0 )
                        <table>
                            <tr><th>Id</th><th>Name</th><th>Email</th></tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        @endforeach
                        </table>
                    @else
                    <p>No record is available </p>
                    @endif
                    </div>
                </div>
            </div>
        @endsection
        @section('advertisement')
         <p>Product lists Lorem ipsum serum culm ellum Lorem ipsum serum culm ellum</p>
         <img src="../image/banner1.jpg" alt="No image">
        @endsection

