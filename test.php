<?php 
require_once 'includes/conf.php'; // <- site-specific settings
require_once 'includes/UUID.php';

?>

<html>
	<head>
		<title>iv4t Test submission</title>
	</head>
	
	<body onload="document.getElementById('longurl').focus()">
		
		<h1>iv4t Test submission</h1>
		
		<form action="index.php" method="post">
			<input type="hidden" name="origin" value="<?php echo IV4T_postOrigin; ?>" />
			<label for="uuid">Enter a long UUID:</label>
			<input type="text" name="uuid" id="uuid" value="<?php echo UUID::v4(); ?>" size="35" /><br />
			<input type="submit" name="submit" id="submit" value="Submit UUID into shortURL DB" />
		</form>
	
	</body>

</html>