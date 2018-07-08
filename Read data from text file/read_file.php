<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Read File</title>
</head>
<body>
	<h1>Read Data From File</h1>
	<hr />
	            <?php

              $handle = fopen('form-data.txt', 'r');
      
              while (!feof($handle)) 
              {
                echo fgets($handle, 1024);
                echo '<br />';
              }
              
              fclose($handle);
            ?> 
	
</body>
</html>