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
    <title>Hotel Search</title>
</head>

<body class="text-center">
    <h1>Hotel Search</h1>
    <form action="{{route('search')}}" method="post" class="container w-50 mb-4 jumbotron">
        @csrf
        <h2 class="mb-4">Put your coordinates and click in search button.</h2>
        <div class="row d-flex justify-content-center my-3b">
            <label for="coord">Enter your coordinates (separated by comma)</label>
            <div class="col-md-10">
                <input type="text" name="coordinates" id="coord" placeholder="enter your coordinates" size="40"
                    required="required" class="form-control">
            </div>
        </div>
        <div class="row d-flex flex-column justify-content-center my-3 mx-auto">
            <label for="criteria" class="text-center">Search criteria:</label>
            <div>
                <select name="search_criteria" id="criteria" class="custom-select custom-select-lg mb-3"
                    style="width:auto;">
                    <option value=“proximity”>Proximity</option>
                    <option value=“pricepernight”>Price per night</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Search" class="btn btn-primary">
    </form>
    <a href="/" class="btn btn-outline-secondary">Home</a>

</body>

</html>
