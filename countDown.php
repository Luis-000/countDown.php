<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>

<body>
    <form action="countDown.php" method="POST">
        <label>Enter a number to count down from</label>
        <input type="text" name="counter">
        <input type="submit" value="Start">
    </form>

</body>

</html>

<?php

$counter = $_POST["counter"];

for ($i = $counter; $i >= 0; $i--) {
    echo "{$i}<br>";
}
