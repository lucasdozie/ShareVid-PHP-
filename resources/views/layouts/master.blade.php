<!DOCTYPE html>
<html>
<head>
    <title>Welcome to TODOlist</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel ="stylesheet" href="/css/app.min.css">
    <link rel ="stylesheet" href="/css/app.css">
    <script src="/javascript/jquery-1.10.1.min.js"></script>
    <script src="/javascript/bootstrap.min.js"></script>
</head>
<body>
    @include('partials.header')
    <section class="mainbody">
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