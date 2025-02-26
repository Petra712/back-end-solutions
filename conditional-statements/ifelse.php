<?php
$year = 2025;


if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 ==0)){
    $yearStatus = "$year is a leap year.";
}

else {
    $yearStatus = "$year is not a leap year.";
}
//if ($year % 400 == 0) {
//    $yearStatus = "$year is a leap year.";
//}
//else if ($year % 100 == 0) {
//    $yearStatus = "$year is not a leap year.";
//}
//else if ($year % 4 == 0) {
//    $yearStatus = "$year is a leap year.";
//}
//else {
//    $yearStatus = "$year is not a leap year.";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $yearStatus ?></p>
</body>
</html>