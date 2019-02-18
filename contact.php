<?php 


if (isset($_POST['submit'])){
	$name = $_POST['yourname'];
    $minima = $_POST['minima'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
	$to = "axilleaskaradimas@gmail.com";
	$subject = "paragelia";
	$message = $name . $minima . $phone  . $address;
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	mail($to,$subject,$message,$headers);
	
	
};


?>