<?php
//Part 1
$fruit2 = 'coconut';
$lengh = strlen($fruit2); //The strlen() is a built-in function in PHP which returns the length of a given string
$position = strpos($fruit2, "o"); //It is to find the first occurrence of a substring in a string or a string inside another string

//Part 2
$fruit = "pneapple";
$needle = 'a';

$needlePosition = strpos($fruit, $needle);

$fruitUppercase = strtoupper($fruit); //the php strtoupper function converts all alphabetic characters in a given string to uppercase

//Part 3
$letter = 'e';
$number = '3';
$longestWord = 'pneumonoultramicroscopicsilicovolcanoconiosis';
$changedWord = str_replace($letter, $number, $longestWord); //replaces some characters with some other characters in a string

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Part 1</h1>
<p>Number of characters: <?= $lengh?></p>
<p>Firs 'o' position : <?= $position?></p>


<h1>Part 2</h1>
    <li><?= $fruit ?></li>
    <li><?= $needle ?></li>
    <li><?= $needlePosition ?></li>
    <li><?= $fruitUppercase ?></li>


<h1>Part 3</h1>

<p>OG Word: <?= $longestWord ?></p>
<p>Changed Word: <?= $changedWord ?></p>
</body>
</html>