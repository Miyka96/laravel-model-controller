<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <ul>
        @foreach($movies as $movie)
            <li>
               <h4>{{$movie->title}}</h4>
               <p>{{$movie->original_title}} <br> {{$movie->date}} </p> 
            </li>
        @endforeach
    </ul>

</body>
</html>