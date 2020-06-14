<!DOCTYPE html>
<html>

<head>
    <title>Car</title>
</head>

<body>

    <form action="/car" method="POST" enctype="multipart/form-data" >
        @csrf
        Make: <input type="text" required name="make"> <br>
        Model: <input type="text" required name="model"> <br>
        Date produced: <input type="date" required name="produced_on"> <br>
        Image: <input type="file" required name="image"> <br>
       
        <input type="submit" value="Save"> <br>
        
        

    </form>


</body>

</html>