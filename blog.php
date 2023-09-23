<?php
    require_once "ClassAutoLoad.php";

$details["sendToEmail"] = "benjamin.mundama@strathmore.edu";
$details["sendToName"] = "BM";
$details["emailSubjectLine"] = "Registration";
$registrationLink = "file://D:/xampp(1)/htdocs/aden/SendMail.php";
$details["emailMessage"] = "Hello Samuel,
You requested an account on ICS 2.2.
In order to use this account you need to <a href='{$registrationLink}'>Click Here</a> to complete the registration process.
Regards,
System Admin
ICS 2.2";
$OBJ_SendMail->SendeMail($details, $conf);

header("Location: ./");
exit();
?>
