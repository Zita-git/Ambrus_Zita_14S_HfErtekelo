<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Név</th>
            <th>Feladat</th>
            <th>Pontok</th>
        </tr>
    @foreach ($homeworks as $homework)
        <tr>
            <td>
                <a href="{{ route('homeworks.show', $homework->id) }}">{{ $homework->name }}</a>
            </td>
            <td>{{ $homework->task }}</td>
            <td>{{ $homework->points }}</td>
            <td>
                <form method="POST" action="{{ route('homeworks.destroy', $homework->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
        
        <p><a href="{{ route('homeworks.create') }}">Új házi</a></p>


</body>
</html>