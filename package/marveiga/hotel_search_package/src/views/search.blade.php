<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Search</title>
</head>
<body>
    <h1>Hotel Search</h1>
    <h2>Put your coordinates and click in search button.</h2>
    <form action="{{route('search')}}" method="post">
        @csrf
        <label for="coord">Enter your coordinates (separated by comma)</label>
        <input type="text" name="coordinates" id="coord" placeholder="enter your coordinates">
        <input type="submit" value="Search">
    </form>
    {{$fool}}
</body>
</html>
