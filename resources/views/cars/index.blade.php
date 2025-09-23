<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auti</title>
</head>
<body>
    <p>Cars list</p>
    <p>lista auta</p>

    <ul>
    @foreach($cars as $car)

<li> {{ $car->name }} - {{ $car->color }}</li>

@endforeach
    </ul>
    
</body>
</html>