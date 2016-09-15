<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{ $title }}</title>
    <script>var BASE_URL = "{{ url('') }}/";</script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <!--google fontss-->
    <link href='https://fonts.googleapis.com/css?family=Lato|Ubuntu' rel='stylesheet' type='text/css'>
     <!-- Font Awesome library -->
    <link href="{{ asset ('assets/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate.css library -->
    <link href="{{ asset ('assets/bower_components/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css') }}" type="text/css" rel="stylesheet">
    

    </head>

    <body>
        @include('content.partials.nav')
        <div class="container-fluid" id="main-content-wrap">
           @include('content.partials.messages')
           @include('content.partials.hero') 
        
        @yield('content')
        
        </div>
        @include('content.partials.footer')
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
    </body>
</html>