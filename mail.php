
<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "ravitejajilkara@mail.com";
$subject = $_POST['subject'];;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject  = ". $subject . "\r\n Message =" . $message;
$headers = " " . "\r\n" .
"";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>



