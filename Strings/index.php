<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Mat";
        $lname = "Smith";
        echo "$name <br>";
        echo $name . " " . $lname . "<br>";
        $string = "The length of this string is 43 characters.";
        echo strlen($string) . "<br>";

        //splitting a string pythons equivelent to string[:3]
        $filename = "image.png";
        $extension = substr($filename, strlen($filename) - 3);
        echo "The extension of the file is $extension <br>";

        //Joining and splitting
        $cars = "Mx5, Lancer, Liberty";
        $car_list = explode(",", $cars);
        echo "My favourite car is the $car_list[1]<br>";

        
        $cars_joined = implode(",", $car_list);
        echo "The fruits are $cars_joined";
    ?>
</body>
</html>