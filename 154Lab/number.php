<?php
$number = $_POST['number'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Is it a Number?</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Is it a Number?</h1>

        <label>Is it a Number:</label>
        <span><?php if (is_numeric($number)){
        echo "True,'$number' is a valid number";
    }
else{
	echo "False,'$number' is an invalid number";
    } ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>
