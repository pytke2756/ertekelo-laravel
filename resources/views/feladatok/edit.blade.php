<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Értékelés</title>
</head>
<body>
    <h1>Értékelés</h1>
    <form method='POST' action="{{ route('feladatok.update', $feladat->id) }}">
        @method('PATCH')
        @csrf
        <div>
            URL:<br>
            <input type="url" name="url" value="{{ $feladat->url }}" disabled>
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="szoveges_ert">
        </div>
        <div>
            Pontszám:<br>
            <input type="number" name="pontszam">
        </div>
        <div>
            <input type="submit" value="Értékelés">
        </div>
    </form>
</body>
</html>