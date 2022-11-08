<?php
$presenTime = new DateTime();
$destinationTime = new DateTime('2030-03-24');
$diff = $destinationTime->diff($presenTime);
$format = 'M - d - Y - a - g : i';
$fuel = ceil(($diff->format('%i'))/10000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dates</title>
</head>
<body>
    <div>
        <?php echo $presenTime->format($format), "<br>", "<br>"; ?>
        <?php echo $destinationTime->format($format), "<br>"; ?>
    </div>
        <?php echo $diff->format('The difference is of %y year(s), %m month(s), %d day(s), %h hour(s), %i minute(s) and %s second(s). '), "<br>"; ?>
        <?php echo "We will need $fuel L of fuel"; ?>
</body>
</html>