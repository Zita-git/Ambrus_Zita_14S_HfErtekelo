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
    <h1>Új Házi</h1>

    

    <form method='POST' action="{{ route('homeworks.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Feladat:<br>
            <input type="text" name="task" value="{{ old('task') }}">
            @error('task')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            URL:<br>
            <input type="text" name="url" value="{{ old('url') }}">
            @error('url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Pontok:<br>
            <input type="number" name="points" value="{{ old('points') }}">
            @error('points')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Megjegyzés:<br>
            <input type="text" name="message" value="{{ old('message') }}">
            @error('message')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Beadás">
        </div>
    </form>
</body>
</html>