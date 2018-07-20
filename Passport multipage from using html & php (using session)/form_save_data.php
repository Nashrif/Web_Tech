<?php
session_start(); 

extract($_SESSION['post']);

//$newfile = fopen("($_SESSION('applicationID'))".txt, "w");
$newfile = fopen("form-data.txt", "w");

$txt = "Personal Information Summary: $applicationID\n\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $nameofapplicint\n";
fwrite($newfile, $txt);

$txt = "Applying Country: $applyingin\n";
fwrite($newfile, $txt);

$txt = "Gender: $gender\n";
fwrite($newfile, $txt);

$txt = "Nationality: $nationality\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $nameofapplicant\n";
fwrite($newfile, $txt);

$txt = "Date Of Birth: $dateofbirth\n";
fwrite($newfile, $txt);

$txt = "Place Of Birth: $districtbirth, $countryOfBirth,$dateofbirth\n";
fwrite($newfile, $txt);

$txt = "Father's Name: $fathersname\n";
fwrite($newfile, $txt);

$txt = "Mother's Name: $mothersname\n";
fwrite($newfile, $txt);

$txt = "Spouse's Name: $spousesname\n";
fwrite($newfile, $txt);

$txt = "Birth ID No: $birthidno\n";
fwrite($newfile, $txt);

$txt = "National ID No: $nationalidno\n";
fwrite($newfile, $txt);

$txt = "\n\nPassport Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Applying In: $applyingin\n";
fwrite($newfile, $txt);

$txt = "Passport Type: $passporttype\n";
fwrite($newfile, $txt);

$txt = "Application Type: New\n";
fwrite($newfile, $txt);

$txt = "\n\nContact Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Mobile No: $mobileno\n";
fwrite($newfile, $txt);

$txt = "Present Address: $presentvillagehouse,$presentroadblocksector $PoliceStationr, $prsentPostOffice, $presentdisctrict\n";
fwrite($newfile, $txt);

$txt = "Permanent Address: $pervillagehouse, $pervillagehouseroadblocksector, $perpostoffice,$perpolicestation, $perdistrict\n";
fwrite($newfile, $txt);

$txt = "Email: $email\n";
fwrite($newfile, $txt);

$txt = "\n\nPayment Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Payment Amount: ($currency)$ammount\n";
fwrite($newfile, $txt);

$txt = "Payment Date: $dateofpayment\n";
fwrite($newfile, $txt);

$txt = "Receipt No: $recieptno\n";
fwrite($newfile, $txt);

$txt = "Bank Name: $nameofbank\n";
fwrite($newfile, $txt);

$txt = "Bank Branch: $nameofbranch\n";
fwrite($newfile, $txt);


fclose($newfile);

header("Location: stage4.php");
?>