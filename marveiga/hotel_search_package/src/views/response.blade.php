<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>

<body>
    <h1> Best options for you</h1>
    <ul>
        @foreach ($zool as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
    <a href={{route('search')}}>Make a new search</a>
</body>

</html>
