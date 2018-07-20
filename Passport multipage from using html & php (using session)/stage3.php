<?php

session_start();

 function OptionCheck($option, $select)
 {
  if(isset($_SESSION[$select])) 
  {
    $select= $_SESSION[$select];

    if($option==$select)
    {
      return true;
    }
  }

  return false;
 }

function data_sanitization($data)
{
  $data= trim($data);
  $data= stripcslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}
 if(!isset($_SESSION['applicationID']))
 {
    $birthidno= $_SESSION['birthidno'];
    $_SESSION['applicationID']= substr($birthidno, 9).rand(15,1000);
 }
if (isset($_POST['sub3'])) 
{
	$_SESSION['currency']= data_sanitization($_POST['currency']); 
	$_SESSION['ammount']= data_sanitization($_POST['ammount']); 
	$_SESSION['nameofbank']= data_sanitization($_POST['nameofbank']); 
	$_SESSION['nameofbranch']= data_sanitization($_POST['nameofbranch']); 
	$_SESSION['dateofpayment']= data_sanitization($_POST['dateofpayment']); 
	$_SESSION['paymenttype']= data_sanitization($_POST['paymenttype']); 
	$_SESSION['recieptno']= data_sanitization($_POST['recieptno']); 
    if (!preg_match("/^[0-9]{1,10}$/", $_POST['ammount'])) 
    {
      $_SESSION['error_form3'] = "Numbers Only";
      header("location: stage3.php");
    }  
    else
	{
      foreach ($_POST as $key => $value) 
      {
        $_SESSION['post'][$key] = $value;
      }

      header("Location:stage4.php");
    }	
	
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2>PASSPORT APPLICATION - STAGE 3</h2>
	<h2><u>online APPLICATION id:<?php echo $_SESSION['applicationID']; ?></u></h2>
	<h4>Fields marked with <font color="red">(*)</font>are mandatory</h4>
	<hr />
	<form action="" method="post">
	<table style="width:80%" >
		<tr>
			<td><h3>Payment Information</h3></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
		<td>Payment Type:</td>
			<td>
			<input type="radio" name="paymenttype" value="online"<?php echo OptionCheck("online", "paymenttype") ? "checked" : ''; ?>>Online<br>
			<input type="radio" name="paymenttype" value="non-online"<?php echo OptionCheck("non-online", "paymenttype") ? "checked" : ''; ?>>Non-online			
			</td>
			<td></td>
			<td></td>
			
		
		</tr>
		<tr>
			<td><input type="Checkbox" />Skip Payment</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Ammount: <font color="red">*</font></td>
			<td>
				<select name="currency" required >
					<option value="bdt"<?php echo OptionCheck("bdt", "currency") ? "selected" : ''; ?>>BDT</option>
					<option value="doller"<?php echo OptionCheck("doller", "currency") ? "selected" : ''; ?>>$doller</option>
				</select>
				<input type="text" name="ammount" value="<?php echo isset($_SESSION['ammount']) ? $_SESSION['ammount'] : ''; ?>" />
			</td>
			<td></td>
			<td></td>
			</tr>
		<tr>
			<td>Date Of Payment: <font color="red">*</font></td>
			<td><input type="date" name="dateofpayment"value="<?php echo isset($_SESSION['dateofpayment']) ? $_SESSION['dateofpayment'] : ''; ?>" required /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Reciept No: <font color="red">*</font></td>
			<td><input type="text" name="recieptno"value="<?php echo isset($_SESSION['recieptno']) ? $_SESSION['recieptno'] : ''; ?>" required /></td>
		</tr>
		<tr>
			<td>Name of Bank:</td>
			<td>
				<select name="nameofbank">
					<option value="-select-">-SELECT-</option>
					<option value="bankasia"<?php echo OptionCheck("bankasia", "nameofbank") ? "selected" : ''; ?> >Bank Asia</option>
					<option value="dhakabank"<?php echo OptionCheck("dhakabank", "nameofbank") ? "selected" : ''; ?> >Dhaka Bank</option>
				</select>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Name of Branch:</td>
			<td>
				<select name="nameofbranch">
					<option value="uttara"<?php echo OptionCheck("uttara", "nameofbranch") ? "selected" : ''; ?> >Uttara</option>
					<option value="banani"<?php echo OptionCheck("banani", "nameofbranch") ? "selected" : ''; ?> >Banani</option>
					<option value="kuril"<?php echo OptionCheck("kuril", "nameofbranch") ? "selected" : ''; ?> >Kuril</option>
				</select>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
										 <?php

								 if (!empty($_SESSION['error_form3'])) 
								 {
								 	echo "<p><span id=\"error\">$_SESSION[error_form3]</span></p>";
								 }

							 ?>
			<td><button type="submit" formaction="stage2.php">PREVIOUS PAGE</button><input type="submit" name="sub3" value="SAVE & NEXT"></td>
		
		</tr>
		
	</table>
	</form>
</body>
</html>