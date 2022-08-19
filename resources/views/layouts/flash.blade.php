<html lang=" str_replace('_', '-', app()->getLocale()) ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Flash Message Examples</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-md-7 offset-3 mt-4">

            @include('flash-message')

            @yield('content')

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>    
</body>

</html>