<?php
session_start(); 

extract($_SESSION['post']);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Final stage</title>
</head>
<body>
	<h2>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</h2>
	<h2><u>online APPLICATION id: <?php echo $_SESSION['applicationID']; ?></u></h2>
	<h3>Enrolment date:  9/03/18 </h3>
	<h4>After you click submit you are not allowed to modify your information.</h4>
	<hr />
	
	<form action="form_save_data.php" method="post">
	<table style="width:80%">
	<tr>
		<td><h3>Personal information Summary</h3></td>
		<td></td>
		<td><h3>Passport Informaition Summary</h3></td>
		<td></td>
		
	</tr>
	<tr>
		<td>Name Of Apllicant:</td>
		<td><?php echo $nameofapplicant; ?></td>
		<td>Applying in</td>
		<td><?php echo $applyingin; ?></td>
	</tr>
	<tr>
		<td>Second Part(Surname):</td>
		<td><?php echo $secondpartname; ?></td>
		<td>Passport Type:</td>
		<td><?php echo $passporttype ; ?></td>
	
	</tr>
	<tr>
		<td>First Part(Given Name)</td>
		<td><?php echo $firstpartname ; ?></td>
		<td>Application Type:</td>
		<td>NEW</td>
	
	
	</tr>
	<tr>
		<td>Gender:</td>
		<td><?php echo $gender ; ?></td>
		<td></td>
		<td></td>
	
	</tr>
	<tr>
		<td>Nationality</td>
		<td><?php echo $nationality ; ?></td>
		<td><h2>Contact Informayion Summary</h2></td>
		<td></td>
		<td></td>
	
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td><?php echo $dateofbirth ; ?></td>
		<td>mobile number:</td>
		<td><?php echo $mobilenumber ; ?></td>
	
	</tr>
	<tr>
		<td>place of birth:</td>
		<td><?php echo $placeofbirth ; ?></td>
		<td>present address:</td>
		<td><?php echo $presentvillage/house. ", ".$presentroad/block/sector.", ".$presentpolicestation. ", ".$prsentpostoffice.", ".$presentdistrict ; ?></td>
	</tr>
	<tr>
		<td>Father's Name:</td>
		<td><?php echo $fathersname ; ?></td>
		<td>Permanent Address:</td>
		<td><?php echo $pervillage/house. ", ".$pervillage/houseroad/block/sector.", ".$perpolicestation. ", ".$perpostoffice.", ".$perdistrict ; ?></td>
	
	
	
	</tr>
	<tr>
		<td>Mother's Name:</td>
		<td><?php echo $mothersname ; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Spouse's Name:</td>
		<td><?php echo $spousesname ; ?></td>
		<td>Email:</td>
		<td><?php echo $email ; ?></td>
		
	</tr>
		<td>Birth Id No:</td>
		<td><?php echo $birthidno ; ?></td>
		<td>Payment Information Summary</td>
		<td></td>
	</tr>
	<tr>
		<td>Old Passport No:</td>
		<td><?php echo $oldpassportno ; ?></td>
		<td>Payment Ammount</td>
		<td><?php echo $currency. ", ".$ammount ; ?></td>
	
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Payment Date:</td>
		<td><?php echo $paymentdate ; ?></td>

	
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Reciept No:</td>
		<td><?php echo $recieptno; ?></td>
		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Bank Name:</td>
		<td><?php echo $bankname; ?></td>
	
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Bank Branch:</td>
		<td><?php echo $bankbranch; ?></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td><td><button type="submit" formaction="stage3.php">PREVIOUS PAGE</button><input type="submit" name="submit4" value="SAVE"></td>
</td>
	
	</tr>
	
	
	
	
	
	
	
	
	
	</table>
	
	
	</form>
	
</body>
</html>