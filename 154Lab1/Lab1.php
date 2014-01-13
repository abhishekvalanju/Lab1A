<?php
    // get the data from the form
    $string = $_POST['string'];  
    
    $testcase = $string;
    
    if (ctype_alpha($testcase)) {
        $testcase = "True";
    }   else {
        $testcase = "False";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Alphabet Validator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Alphabet Validator</h1>

        <label>String entered:</label>
        <span><?php echo $string; ?></span><br />
        
        <br />
        
        <label>Contains all letters?:</label>
        <span><?php echo $testcase; ?></span><br />

           
        <br />
        <FORM><INPUT Type="button" VALUE="Return" onClick="history.go(-1);return true;"></FORM>
    </div>
</body>
</html>