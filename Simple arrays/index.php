<?php
$arr = [1, 4, 5, 7];

$arr0 = $arr[0];
$arr1 = $arr[1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <?php
        print_r($arr);
        echo "<br>First number is: $arr0 <br> Second Number is: $arr1<br><br>";

        //remove the 3rd item in the array
        unset($arr[2]);
        print_r($arr);

        $c = count($arr);
        echo "<br><br> the array has: $c items in it. <br>";

        $arr[2] = 23;
        $c = count($arr);
        echo "<br> the array now has: $c items in it. <br>";
    ?>
    <h2>Sorting arrays & Concatenating arrays</h2>
    <hr>


    <?php
        $arr = [1, 2, 3];

        //push item to the end of the stack
        array_push($arr, 4);

        //push item to the start of the stack
        array_unshift($arr, 0);
        print_r($arr);

        //pop the the end of the stack
        array_pop($arr);

        //pop the start of the stack
        array_shift($arr);
        echo "<br>";

        print_r($arr);
        echo "<br>";


        $numbers = [4,2,3,1,5];
        sort($numbers);
        print_r($numbers);


    ?>
    <h2>Advanced array functions</h2>
    <hr>

    <?php 
        $odds = [1,3,5,7,9];
        $evens = [2,4,6,8,10];
        $all = array_merge($odds, $evens);
        print_r($all);
        echo "<br>";

        $numbers = [1,2,3,4,5,6];
        print_r(array_slice($numbers, 3));
        echo "<br>";

        $numbers = [1,2,3,4,5,6];
        //copy 2 numbers from pos 3
        print_r(array_slice($numbers, 3, 2));
        echo "array_slice";
        echo "<br>";

        print_r($numbers);
        echo "<br>";

        $numbers = [1,2,3,4,5,6];
        //extract 2 items at pos 3
        print_r(array_splice($numbers, 3, 2));
        echo "array_splice";
        echo "<br>";

        print_r($numbers);



    ?>

    <hr>




</body>

</html>