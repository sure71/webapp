<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Landscape</title>
</head>

<body>
<div id="container">
	<div id="header">
		<h1><span class="off">Landscape </span></h1>
    </div>
	<div id="content">
    	<img class="picture" src="images/image3.jpg"/>
        <div class="contenttext">
            <h2>Template - Version 1.0.2 -
<?php
   $dbhost = '10.0.15.23:3306';
   $dbuser = 'root';
   $dbpass = 'abc';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connection to MySQL database successfull';
   mysql_close($conn);
?>

</h2>
        </div>

    </div>
</div>
</body>
</html>
