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
        <input type="text" name="coordinates" id="coord" placeholder="enter your coordinates" required="required">
        <label for="criteria">Search criteria:</label>
        <select name="search_criteria" id="criteria">
            <option value=“proximity”>Proximity</option>
            <option value=“pricepernight”>Price per night</option>
        </select>
        <input type="submit" value="Search">
    </form>
    <a href="/">Home</a>

</body>

</html>
