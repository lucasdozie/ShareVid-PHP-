<!DOCTYPE html>
<html>
<head>
    <title>ShareVid | platform where ideas are distributed</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel ="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="/javascript/jquery-1.10.1.min.js"></script>
    <script src="/javascript/bootstrap.min.js"></script>
</head>
<body>
    @include('partials.header')
    <section class="mainbody">
    @include('partials.user_nav')
        @if (Session::has('message'))
            <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif
        <section class="wrapper">
            <div class="col-md-12">
                @yield('content')
            </div>
            <div class="col-md-3">
                @section('advertisemnt')
                <p>Promo! promo!! promo!!!, buy one take one free</p>
                @endsection
                @yield('advertisement')
            </div>
        </section>
        @include('partials.footer')
    </section>
    
    
</body>
</html>