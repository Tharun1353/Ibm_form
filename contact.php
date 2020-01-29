<?php
$name= $_POST['name'];
$visitor_mail=$_POST['email'];
$mobile_numbe=$_POST['mobile number'];
$Total_experience=$_POST['Total Experience'];
$Highest_qualification=$_POST['Highest Qualification'];
$Current_organisation=$_POST['Current organisatio'];
$message=$_POST['Message'];



$email_from='Tharunyarramreddy18@gmail.com';
$email_subject="New Form Submission";
$email_body="User Name:$name.\n".
    "User Email:$visitor_email.\n".
    "User Mobile number:$mobile_number.\n".
    "User Total Experience:$Total_experience.\n".
    "User Highest qualification:$Highest_qualification.\n".
    "User Current Organisation:$Current_organisation.\n".
    "User Message:$Message.\n";


$to="Tharunyarramreddy1353@gmail.com";
$headers="From:$email_fom\r\n";
$headers="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");

?>

