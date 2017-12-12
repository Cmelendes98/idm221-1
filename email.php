<?php
// the message
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone-number'];
$message = $_POST['message'];
$ok = true; 
if($email == '') {
	$ok = false;
}
if($name == '') {
	$ok = false;
}
if($phone == '') {
	$ok = false;
}
if($message == '') {
	$ok = false;
}
// use wordwrap() if lines are longer than 70 characters
$msg = "Person's name: " . $name . '\n';
$msg .= "Person's email: " . $email . '\n';
$msg .= "Person's phone: " . $phone . '\n';
$msg .= "Message: " . $message . '\n';

// send email
if ($ok == true){
	mail("Cmelendes98@gmail.com","Website Submission",$msg);
header("Location: thank-you.html");
}
else {
echo 'please fill out all fields';
}
?>
