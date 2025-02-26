<?php
$number = "5";

if ($number == "1") {
    $status1 = "monday";
}

if ($number == "2") {
    $status1 = "tuesday";
}

if ($number == "3") {
    $status1 = "wednesday";
}

if ($number == "4") {
    $status1 = "thursday";
}

if ($number == "5") {
    $status1 = "friday";
}

if ($number == "6") {
    $status1 = "saturday";
}

if ($number == "7") {
    $status1 = "sunday";
}





//part 2
$number2 = "6";

if ($number2 == "1") {
    $status = "monday";
}

if ($number2 == "2") {
    $status = "tuesday";
}

if ($number2 == "3") {
    $status = "wednesday";
}

if ($number2 == "4") {
    $status = "thursday";
}

if ($number2 == "5") {
    $status = "friday";
}

if ($number2 == "6") {
    $status = "saturday";
}

if ($number2 == "7") {
    $status = "sunday";
}

$statusUppercase = strtoupper($status);

$statusSmallA = str_replace("A", "a", $statusUppercase);

$lastAPosition = strrpos($statusUppercase, 'A'); //find the last 'A' position

$statusChangeLastA = substr_replace($statusUppercase, 'a', $lastAPosition, 1);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Part 1</h2>
    <p>The corresponding day for number <?= $number ?> is <?= $status1?></p>

    <h2>Part 2</h2>
    <p>The corresponding day for number <?= $number2 ?> is <?= $statusUppercase?></p>
    <p>The corresponding day for number <?= $number2 ?> is <?= $statusSmallA?></p>
    <p>The corresponding day for number <?= $number2 ?> is <?= $statusChangeLastA?></p>
</body>
</html>