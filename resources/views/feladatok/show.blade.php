<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $feladat->id }}</title>
</head>
<body>
    <div>
        <p>URL: {{ $feladat->url }}</p>
        <p>Szöveges értékelés: {{ $feladat->szoveges_ert }}</p>
        <p>Pontszám: {{ $feladat->pontszam }} / 100</p>
    </div>
    <a href="{{ route('feladatok.edit', $feladat->id) }}">Értékel</a>
</body>
</html>
