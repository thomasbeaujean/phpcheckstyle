<!DOCTYPE html>
<html>
	<head>
		<title>PHPCheckstyle Web Interface</title>
	</head>
	
	<body>
	
	<h1><img src="./html/images/Logo_phpcheckstyle.png"/>&nbsp;PHPCheckstyle</h1>
	
	<form name="myform" action="runFromWeb.php" method="POST">
	
	<p>File(s) to analyse
	<input type="text" id="sourceDir" name="sourceDir" value="./test"></input>
	</p>
	
	<p>Destination directory
	<input type="text" id="resultDir" name ="resultDir" value="./checkstyle_result"></input>
	</p>
	
	<p>Configuration file
	<input type="text" id="configFile" name ="configFile" value="default.cfg.xml"></input>
	</p>
	
	<input type="submit" value="Run"></input>
	
	</form>
	
	</body>
	
</html>