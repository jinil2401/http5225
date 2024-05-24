<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>

<body>
    <?php
    $Hour = total(1, 24);

    echo "Current Hour: ", $Hour, "<br>";
    
    if ($Hour >= 6 && $Hour < 12) echo "Good Morning";
    else if ($Hour >= 12 && $Hour < 18) echo "Good Afternoon";
    else if ($Hour >= 18 && $Hour < 21) echo "Good Evening";
    else if ($Hour >= 21 && $Hour <= 24) echo "Good Night";
    else if ($Hour > 0 && $Hour < 6) echo "GO Sleep Its Late Night!";
    
    echo "<br><br>";
    
    $random = total(1, 100);
    if ($random % 5 == 0 && $random % 3 == 0) echo "FizzBuzz";
    else if ($random % 3 == 0) echo "Fizz";
    else if ($random % 5 == 0) echo "Buzz";
    else echo $random;
    ?>
</body>

</html>