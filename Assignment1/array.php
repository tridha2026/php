<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="array.php" method="post">

    <label for="string">Input your color:</label>
    <input type="text" name="string" id="string" required><br>
    <label for="word">Enter the color name u want to remove :</label>
    <input type="text" name="word" id="word" required><br>
    <input type="submit" value="Submit">
    
    
</form>

<?php

    $color = $_POST["colors"];
    $remove=$_POST['word'];
    $colorArray = explode(",", $color);
    $newArray = array_filter($colorArray, function($value) use ($remove) {
        return trim($value) !== $remove;
    });

    foreach ($newArray as $color) {
        echo $color . "<br>";
    }


?>



</body>
</html>