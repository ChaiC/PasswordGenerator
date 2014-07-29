<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<title>
		Password Generator		
	</title>
	
	<?php require 'generator.php'; ?>
	
</head>

<body>
<div id="page-wrap">
	<h1>
		Password Generator		
	</h1>
	<p>
		A trick to a good password is 'rememberability' (good luck remembering that word!). XKCD has given us a way to generate a strong
		password. Just pick a few common words and stitch them together. 
		<br/><br/>
		<img src = "password.png" alt = "xkcd image" width = "600px">
		<br/><br/>
		
		Create your own XKCD style password using the following generator.
		
		<br/><br/>
	
	Select the password specifications:

<form method='POST' action='index.php'>

	<select name="numberWords">
		<option value="2">2</option>
		<option value="4">4</option>
		<option value="8">8</option>
		<option value="10">10</option>
	</select> How many words should the password contain?	
	<br/><br/>	
	<input type="checkbox" name="isSpecial" value="1">Should the password have special symbols? (This will replace the first 'a' by '@' and the first 's' by '$')	
	<br/><br/>	
	<input type="checkbox" name="isNumber" value="1">Should the password include a number? (This will replace the first 'l' by '1' and the first 'e' by '3')
	<br/><br/>	
	<input type="checkbox" name="isCaps" value="1">Should the first letter be capital?
	<br/><br/>	
	<input type="submit" value="Submit">	
</form>

<? if (array_key_exists("numberWords", $_POST)){ ?>
<h2> Your password is <? echo $pwd ?>. </h2>
<? } ?>

</div>

</body></html>
