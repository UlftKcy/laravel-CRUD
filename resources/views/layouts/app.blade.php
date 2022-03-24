<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->

</head>
<body>
<div id="app">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{"/js/jquery-3.6.0.min.js"}}"></script>
<script src="{{"/js/create-post.js"}}"></script>
</body>
</html>
