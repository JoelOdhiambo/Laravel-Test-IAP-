<!DOCTYPE html>
<html>
<head>
    <title>Car</title>
</head>

<body>
    
    @foreach($cars as $car)
    <ul>
        <li>{{$car->make}}</li>
        <li>{{$car->model}}</li>
        <li>{{$car->produced_on}}</li>
        </ul>
    @endforeach
    

</body>

</html>