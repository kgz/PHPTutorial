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
        $phone_numbers = [
            "Mat" => 654612354231,
            "Jake" => 5455435453
        ];

        print_r($phone_numbers);
        echo "<br>Mats Phone number is: " . $phone_numbers["Mat"] ."<br>";

        //check if key exists

        if (array_key_exists("Alex", $phone_numbers)) 
            echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
        else  echo "Alex's phone number is not in the phone book!";
        
        echo "<br>";
        if (array_key_exists("Jake", $phone_numbers)) 
            echo "Jake's phone number is " . $phone_numbers["Jake"] . "\n";
        else echo "Jake's phone number is not in the phone book!";
        echo "<br>";
        
        //extract the keys from the array
        print_r(array_keys($phone_numbers));
        echo "<br>";
        //extract the values from the array

        print_r(array_values($phone_numbers));

    ?>
</body>
</html>