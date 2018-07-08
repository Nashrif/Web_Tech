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
 if (isset($_POST['submit2'])) 
{
	$_SESSION['officeno']= data_sanitization($_POST['officeno']);
	$_SESSION['passportno']= data_sanitization($_POST['passportno']);
	$_SESSION['residenceno']= data_sanitization($_POST['residenceno']);
	$_SESSION['placeofissue']= data_sanitization($_POST['placeofissue']);
	$_SESSION['mobileno']= data_sanitization($_POST['mobileno']);
	$_SESSION['dateofissue']= data_sanitization($_POST['dateofissue']);
	$_SESSION['re-issurreason']= data_sanitization($_POST['re-issurreason']);
	$_SESSION['name']= data_sanitization($_POST['name']);
	$_SESSION['country']= data_sanitization($_POST['country']);
	$_SESSION['village/house2']= data_sanitization($_POST['village/house2']);
	$_SESSION['road/block/sector2']= data_sanitization($_POST['road/block/sector2']);
	$_SESSION['district2']= data_sanitization($_POST['district2']);
	$_SESSION['policestation2']= data_sanitization($_POST['policestation2']);
	$_SESSION['postoffice2']= data_sanitization($_POST['postoffice2']);
	$_SESSION['contactno']= data_sanitization($_POST['contactno']);
	$_SESSION['email2']= data_sanitization($_POST['email2']);
	$_SESSION['relationship']= data_sanitization($_POST['relationship']);
	
	
   if (!preg_match("/^[0-9]{11}$/", $_POST['officeno'])) 
    {
      $_SESSION['error_form2'] = "Numbers Only";
      header("location: stage2.php");
    }   
    else
    {
      foreach ($_POST as $key => $value) 
      {
        $_SESSION['post'][$key] = $value;
      }

      header("Location: stage3.php");
    }
 
}
 ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Stage 2</title>
</head>
<body>
	<h2>PASSPORT APPLICATION - STAGE 2</h2>
	<h2><u>online APPLICATION id: <?php echo $_SESSION['applicationID']; ?></u></h2>
	<h4>Fields marked with <font color="red">(*)</font>are mandatory</h4>
	<hr />
	<form action="" method="post">
	<table style="width:80%">
		<tr>
			<td><h3>Applicant Contact Information</h3></td>
			<td></td>
			<td><h3>Old Passport Information</h3></td>
			<td></td>
		
		</tr>
		<tr>
			<td>office no:</td>
			<td><input type="text" name="officeno" value="<?php echo isset($_SESSION['officeno']) ? $_SESSION['officeno'] : ''; ?>" /></td>
			<td>Passport No:</td>
			<td><input type="text" name="passportno" value="<?php echo isset($_SESSION['passportno']) ? $_SESSION['passportno'] : ''; ?>" /></td>
		</tr>
		<tr>
			<td>Residence No:</td>
			<td><input type="text" name="residenceno" value="<?php echo isset($_SESSION['residenceno']) ? $_SESSION['residenceno'] : ''; ?>" /></td>
			<td>Place of issue</td>
			<td><input type="text" name="Placeofissue"value="<?php echo isset($_SESSION['placeofissue']) ? $_SESSION['placeofissue'] : ''; ?>" /></td>
			
		</tr>
		<tr>
			<td>Mobile No:</td>
			<td><input type="text" name="mobileno"value="<?php echo isset($_SESSION['mobileno']) ? $_SESSION['mobileno'] : ''; ?>" /></td>
			<td>Date of Issue:</td>
			<td><input type="text"name="dateofissue"value="<?php echo isset($_SESSION['dateofissue']) ? $_SESSION['dateofissue'] : ''; ?>" /></td>
			
		</tr>
		<tr>
			<td><h3>Emergency Contatct Person's Details</h3></td>
			<td></td>
			<td>Re-issue Reason:</td>
			<td>
				<select name="re-issurreason">
					<option value="-selcet-">-SELECT-</option>
					<option value="lost"<?php echo OptionCheck("lost", "re-issurreason") ? "selected" : ''; ?> >Lost</option>
					<option value="pageover"<?php echo OptionCheck("pageover", "re-issurreason") ? "selected" : ''; ?> >page over</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Name: <font color="red">*</font></td>
			<td><input type="text" name="name"value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" required /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Country: <font color="red">*</font></td>
			<td>
				<select name="country" required >
  					<option value="banglades"<?php echo OptionCheck("banglades", "country") ? "selected" : ''; ?> >BANGLADESH</option>
 					<option value="france"<?php echo OptionCheck("france", "country") ? "selected" : ''; ?> >FRANCE</option>
					<option value="italy"<?php echo OptionCheck("italy", "country") ? "selected" : ''; ?> >ITALY</option>
  					<option value="canada"<?php echo OptionCheck("canada", "country") ? "selected" : ''; ?> >CANADA</option>
					<option value="spain"<?php echo OptionCheck("spain", "country") ? "selected" : ''; ?> >SPAIN</option>
				</select>
			</td>
			<td></td>
			<td></td>
		
		</tr>
		<tr>
			<td><input type="checkbox" />same as permanent address</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" />same as present address</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Village/House:</td>
			<td><input type="text" name="village/house2" value="<?php echo isset($_SESSION['village/house2']) ? $_SESSION['village/house2'] : ''; ?>" /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Road/Block/Sector:</td>
			<td><input type="text" name="road/block/sector2" value="<?php echo isset($_SESSION['road/block/sector2']) ? $_SESSION['road/block/sector2'] : ''; ?>"/></td>
			<td></td>
			<td></td>
			
		</tr>
		<tr>
			<td>District: <font color="red">*</font></td>
			<td>
				<select name="district2" required>
					<option value="-select-">-SELECT-</option>
					<option value="dhaka"<?php echo OptionCheck("dhaka", "district2") ? "selected" : ''; ?> >Dhaka</option>
					<option value="barguna"<?php echo OptionCheck("barguna", "district2") ? "selected" : ''; ?> >Barguna</option>
					<option value="barisal"<?php echo OptionCheck("barisal", "district2") ? "selected" : ''; ?> >Barisal</option>
					<option value="bhola"<?php echo OptionCheck("bhola", "district2") ? "selected" : ''; ?> >Bhola</option>
					<option value="chandpur"<?php echo OptionCheck("chandpur", "district2") ? "selected" : ''; ?> >Chandpur</option>
				</select>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Police Station: <font color="red">*</font></td>
			<td>
				<select name="policestation2" required>
					<option value=""></option>
					<option value="uttara" <?php echo OptionCheck("uttara", "policestation2") ? "selected" : ''; ?> >Uttara</option>
					<option value="mirpur"<?php echo OptionCheck("mirpur", "policestation2") ? "selected" : ''; ?> >Mirpur</option>
					<option value="turag"<?php echo OptionCheck("turag", "policestation2") ? "selected" : ''; ?> >Turag</option>
					<option value="kuril"<?php echo OptionCheck("kuril", "policestation2") ? "selected" : ''; ?> >Kuril</option>
				</select>
			</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr>
			<td>Post Office: <font color="red">*</font></td>
			<td>
				<select name="postoffice2" required>
					<option value=""></option>
					<option value="uttara"<?php echo OptionCheck("uttara", "postoffice2") ? "selected" : ''; ?> >Uttara</option>
					<option value="mirpur"<?php echo OptionCheck("mirpur", "postoffice2") ? "selected" : ''; ?> >Mirpur</option>
					<option value="turag"<?php echo OptionCheck("turag", "postoffice2") ? "selected" : ''; ?> >Turag</option>
					<option value="kuril"<?php echo OptionCheck("kuril", "postoffice2") ? "selected" : ''; ?> >Kuril</option>
				</select>
			</td>
			<td></td>
			<td></td>
			
		</tr>
		<tr>
			<td>Contact No: <font color="red">*</font></td>
			<td><input type="text" name="contactno"value="<?php echo isset($_SESSION['contactno']) ? $_SESSION['contactno'] : ''; ?>" required /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" name="email2" /></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Relationship: <font color="red">*</font></td>
			<td>
				<select name="relationship" required>
					<option value="-selcet-">-SELECT-</option>
					<option value="single"<?php echo OptionCheck("single", "relationship") ? "selected" : ''; ?> >Single</option>
					<option value="married"<?php echo OptionCheck("married", "relationship") ? "selected" : ''; ?> >Married</option>
					<option value="widow"<?php echo OptionCheck("widow", "relationship") ? "selected" : ''; ?> >Widow</option>
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

                     if (!empty($_SESSION['error_form2'])) 
                     {
                      echo "<p><span id=\"error\">$_SESSION[error_form2]</span></p>";
                     }

                   ?>
				   
			<td><button type="submit" formaction="stage1.php">PREVIOUS PAGE</button><input type="submit" name="submit2" value="SAVE & NEXT"></td>
		
		</tr>
	
	
	
	
	
	
	</table>
	
	
	</form>
</body>
</html>