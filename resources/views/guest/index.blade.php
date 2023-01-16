<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies DB</title>
</head>
<body>
    <ul>
        @foreach ($movies as $movie)    
        <li>Titolo: {{$movie->title}},
            <br>
            Titolo Originale: {{$movie->original_title}}
            <br>
            Nazionalità: {{$movie->nationality}}
            <br>
            Data Uscita: {{$movie->date}}
            <br>
            Voto: {{$movie->vote}}
        </li>
        @endforeach
    </ul>
</body>
</html>