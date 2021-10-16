<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Result</title>
</head>

<body class="text-center">
    <main class="container w-50 jumbotron">
        <h1> Best options for you</h1>
        <ul class="list-group list-group-flush mb-4 ">
            @foreach ($response as $item)
            <li class="list-group-item h5">{{$item}}</li>
            @endforeach
        </ul>
        <a href={{route('search')}} class="btn btn-secondary">Make a new search</a>
    </main>
</body>

</html>
