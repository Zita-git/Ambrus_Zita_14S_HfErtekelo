<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homework->name }}</title>
</head>
<body>
    <p><a href="{{ route('homeworks.index') }}">Főoldal</a></p>
    <h1>{{ $homework->name }} </h1>
    <p>Feladat: {{ $homework->task }} </p>
    <p>URL: {{ $homework->url }} </p>
    <p>Pontjai: {{ $homework->points }} </p>
    <p>Megjegyzés: {{ $homework->message }} </p>
    
    
    <p><a href="{{ route('homeworks.edit', $homework->id) }}">Szerkesztés</a></p>
    
</body>
</html>