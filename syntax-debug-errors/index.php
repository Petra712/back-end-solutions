
<?php
	$text = 'Test 123...';
	$_text = 'Test 456';
	$_text3 = 'test';
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
        <li><?="$text"?></li>
        <li><?="$_text"?></li>
        <li><?="$_text3"?></li>
        <li><?="$first"?></li>
        <li><?="$animal"?></li>
        
    </ul>  

</body>
</html>