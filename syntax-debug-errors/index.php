
<?php
	$text = 'Test 123...';
	$text2 = 'Test 456';
	$text3 = 'test';
	$first = 'Building castles in the sky and in the sand';
	$animal = 'Platypus';
?>

<!DOCTYPE html>
<mtml>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/global.css">
	<link rel="stylesheet" type="text/css" href="/css/directory.css">
	<link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>

<body>

	<h1>Debug errors</h1>

	<ul>
        <li>Debug this page so the script runs without error</li>
        <li>Print all the variables in a unordered list below:</li>
    </ul>  

	<ul>
		<li><?= $text ?></li>
        <li><?= $text2 ?></li>
        <li><?= $text3 ?></li>
        <li><?= $first ?></li>
        <li><?= $animal ?></li> 
	</ul>
</body>
</html>