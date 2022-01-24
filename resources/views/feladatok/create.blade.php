<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új feladat hozzáadása</title>
</head>
<body>
    <form method="POST" action="{{ route('feladatok.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            URL: <input type="url" name="url">
        </div>
        <div>
            <input type="submit" value="Hozzáadás">
        </div>
    </form>
</body>
</html>