<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
   <form name="count" method="post" action="index.php">
	<table align="center">
	<tr>
		<th>Character</th>
		<th>Count</th>
	</tr>
	
	<?php 
	
	
    if($_POST['text']=="")
	{
		header("location:index.php");
	}
	else
	{
		$enter=0;
		$input=$_POST['text'];
		$length=strlen($input);
		for($i=0;$i<128;$i++)
		{
			$arr[$i]=0;
		}
	
		for($count=0; $count<$length; $count++)
		{
			$x=ord($input[$count]);
			$arr[$x]++;
			if($x==10 || $x==13)
			{
				$enter++;
			}
		}	
		for($i=0;$i<128;$i++)
		{
			if($i==10 && $enter>0)
			{
				echo "<tr>";
				echo "<td>";
				echo "Enter";
				echo "</td>";
				echo "<td>";
				echo $enter/2;
				echo "</td>";
				echo "</tr>";	
			}
			else if($i==32 && $arr[$i]>0)
			{
				echo "<tr>";
				echo "<td>";
				echo "Space";
				echo "</td>";
				echo "<td>";
				echo $arr[$i];
				echo "</td>";
				echo "</tr>";
			}
			else if($arr[$i]>0 && $i!=10 && $i!=13 && $i!=32)
			{
				echo "<tr>";
				echo "<td>";
				echo chr($i);
				echo "</td>";
				echo "<td>";
				echo $arr[$i];
				echo "</td>";
				echo "</tr>";
			}
		}
	}
	
?>
	
		</table>
		<br><br><br>
		<button type="submit">Input Another String</button><br><br><br><br><br><br><br><br>

		<table align="center">
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
<?php
	$input=$_POST['text'];
	$length=strlen($input);

	$arr=array_count_values(str_word_count($input, 1));
	ksort($arr);
	foreach($arr as $word=>$count)
	{
		echo "<tr>";
		echo "<td>";
		echo $word;
		echo "</td>";
		echo "<td>";
		echo $count;
		echo "</td>";
		echo "</tr>"; 
	}
?>
        </table>
        <br><br><br>
		<button type="submit">Input Another String</button><br><br><br>
</form>
</body>
</html>