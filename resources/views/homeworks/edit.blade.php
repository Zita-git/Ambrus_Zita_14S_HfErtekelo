<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="{{ route('homeworks.index') }}">Főoldal</a></p>
    <h1>Házi szerkeztése</h1>
    <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Név:<br>
            <input type="text" name="name" value="{{ $homework->name }}">
            
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Feladat:<br>
            <input type="text" name="task" value="{{ $homework->task }}">
            @error('task')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            URL:<br>
            <input type="text" name="url" value="{{ $homework->url }}">
            @error('url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Pontok:<br>
            <input type="text" name="points" value="{{ $homework->points }}">
            @error('points')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Megjegyzés:<br>
            <input type="text" name="message" value="{{ $homework->message }}">
            @error('message')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <input type="submit" value="Szerkesztés">
        </div>
        
        <p><a href="{{ route('homeworks.show', $homework->id) }}">Vissza az előző oldalra</a></p>


    </form>
</body>
</html>