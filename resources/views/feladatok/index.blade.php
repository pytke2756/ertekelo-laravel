<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feladatok</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>URL</th>
            <th>Szöveges értékelés</th>
            <th>Pontszám</th>
        </tr>
        @foreach($feladatok as $feladat)
        <tr>
            <td><a href="{{ route('feladatok.show', $feladat->id) }}">Megtekint</a></td>
            <td>{{ $feladat->url }}</td>
            <td>{{ $feladat->szoveges_ert }}</td>
            <td>{{ $feladat->pontszam }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>