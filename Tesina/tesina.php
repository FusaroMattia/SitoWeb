<!DOCTYPE html>
<html>
<body>
<form action="es.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['PHP_SELF'];	
echo "<br>";
$_SERVER['GATEWAY_INTERFACE'];	
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo  $_SERVER['SERVER_NAME'];	echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];	echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];	echo "<br>";
echo $_SERVER['REQUEST_METHOD'];	echo "<br>";
echo $_SERVER['REQUEST_TIME'];	echo "<br>";
echo $_SERVER['QUERY_STRING'];	echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];echo "<br>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'];echo "<br>";
echo $_SERVER['HTTP_HOST'];	echo "<br>";
echo $_SERVER['HTTP_REFERER'];	echo "<br>";
echo $_SERVER['HTTPS'];echo "<br>";
echo $_SERVER['REMOTE_ADDR'];	echo "<br>";
echo $_SERVER['REMOTE_HOST'];echo "<br>";
echo $_SERVER['REMOTE_PORT'];echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];	echo "<br>";
echo $_SERVER['SERVER_ADMIN'];	echo "<br>";
echo $_SERVER['SERVER_PORT'];echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];echo "<br>";	
echo $_SERVER['PATH_TRANSLATED'];echo "<br>";	
echo $_SERVER['SCRIPT_NAME'];echo "<br>";
echo $_SERVER['SCRIPT_URI'];echo "<br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>