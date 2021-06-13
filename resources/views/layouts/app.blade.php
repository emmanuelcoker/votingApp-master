<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ivote') }}</title>
     
     <!--Shortcut icon-->
    <link rel="shortcut icon" href="/img/comroc.jpg" type="image/x-icon">
    <link rel="stylesheet" href=" {{asset('css/app.css?v=').time()}}" type="text/css">
    

</head>
<body>
    <div id="app">
       
        <main>
            <div class="container-fluid mt-5 pt-4 pl-0">
                @include('inc.messages')
                 @yield('content')
            </div>
        </main> 
       
    </div>

    

      <!-- Scripts -->
      <script type="text/javascript"src="{{asset('js/app.js?v=').time()}}"></script>

</body>
</html>
