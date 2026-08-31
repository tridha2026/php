<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absolute Value</title>
    <form action="index.php" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Submit">
</head>
<body>

<h2>Absolute Value</h2>

<?php
$x = $_POST['number'];
$x = abs($x);
echo "<br>the absolute value is: " . $x;
?>

</body>
</html>